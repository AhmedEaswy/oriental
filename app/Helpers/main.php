<?php

use App\Models\Setting;
use Illuminate\Http\UploadedFile;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

if (!function_exists('uploader')) {
    /**
     * @param $file
     * @param string $folder
     * @param null $disk
     * @param array $validation
     * @return mixed
     */
    function uploader($file, string $folder = "", $disk = null, array $validation = []): string
    {
        $request = request();
        $isFile = $file instanceof UploadedFile;

        // remove any / char form var
        $path = rtrim($folder, '/');

        // validate Image
        if (!$isFile) {
            if (empty($validation)) $request->validate([$file => ['required', 'image', 'mimes:jpeg,jpg,png']]);
            else $request->validate([$file => $validation]);
        }

        // get file if not getting before
        $image = $isFile ? $file : $request->file($file);

        // this line if true throw Exception 400 with errors
        if (blank($image->getClientOriginalExtension())) response()->json(["status" => false, "errors" => [(is_string($file) ? $file : "file") => "file without Extension try by other way please ♥."]], 400)->send();

        $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();

        $image->storeAs($path, $filename, ['disk' => blank($disk) ? 'main' : $disk]);

        return str_replace('//', '/', 'uploads/' . $path . '/' . $filename);
    }
}

if (!function_exists('locals')) {
    /**
     * @return string[]
     */
    function locals(): array
    {
        return ['ar', 'en',];
    }
}


if (!function_exists('current_local')) {
    /**
     * @return string
     */
    function current_local(): string
    {
        return app()->getLocale();
    }
}
if (!function_exists('current_dir')) {
    /**
     * @return string
     */
    function current_dir(): string
    {
        return current_local() == "ar" ? 'rtl' : 'ltr';
    }
}

if (!function_exists('check_image_exists_or_default')) {
    /**
     * @param string|null $imageUrl
     * @return string
     */
    function check_image_exists_or_default(?string $imageUrl = null): string
    {
        // check is url
        if (filter_var($imageUrl, FILTER_VALIDATE_URL) == true) return $imageUrl;
        $path = public_path(str_replace(asset(''), '', $imageUrl ?? ''));
        if (!file_exists($path)) {
            return config('app.image.default', asset('assets/images/favicon.png'));
        }
        return $imageUrl ?? config('app.image.default', asset('assets/images/favicon.png'));
    }
}


/**
 * @param string $name
 * @param $default
 * @param string|null $type
 * @param string|null $group_by
 * @param string|null $locale
 * @return string
 * @throws ContainerExceptionInterface
 * @throws NotFoundExceptionInterface
 * @throws \Psr\SimpleCache\InvalidArgumentException
 */
function setting(string $name, $default = '', string $type = null, string $group_by = null, string $locale = null): string
{

    $locale = $locale ?? substr(app()->getLocale(), 0, 2);
    $type = $type ?? 'string';
    if (cache()->has('settings')) {
        $settings = cache()->get('settings');
    } else {
        $settings = cache()->remember('settings', now()->addMinutes(5), function () {
            return Setting::all();
        });
    }

    if ($setting = $settings->where('name', $name)->firstWhere('locale', '=', $locale)) {
        return $setting->value ?? $default;
    }

    return Setting::firstOrCreate(
            ['name' => $name, 'locale' => $locale],
            ['name' => $name, 'type' => $type, 'locale' => $locale, 'value' => $default ?? $name, 'group_by' => $group_by]
        )->value ?? $default;
}
