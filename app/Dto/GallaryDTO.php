<?php

namespace App\Dto;

use Spatie\DataTransferObject\DataTransferObject;
class GallaryDTO extends DataTransferObject
{

  public string $path;


  public static function fromModel($path): GallaryDTO
  {
      return new static([
          'path' => $path,
      ]);
  }


}
