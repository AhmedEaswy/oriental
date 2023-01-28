<x-frontend.layout.master>
  <!-- START MAIN BANNER -->
  <section
    class="x-main"
    style="background-image: url({{ setting('banner', asset('assets/frontend/image/banner.jpg'), 'file', 'about_us', '*') }});"
  >
    <div class=" z-10 relative">
      <div class="text-center sm:mb-20 mb-5">
        <h1 class="uppercase mc text-4xl font-bold">{{ setting('title', 'Contact Us', 'string', 'about_us', '*') }}</h1>
        <p class="mt-4 text-xl text-white">{{ setting('description', 'You can fill this form, and we will call you back ASAP', 'string', 'about_us', '*') }}</p>
      </div>
      <div class="grid sm:grid-cols-2 grid-cols-1 mt-4">
        <div class="">
          <div class="flex justify-center ">
            <img class="block sm:w-auto w-full sm:mx-0 mx-10 max-w-sm" src="{{ setting('logo', asset('assets/frontend/image/logo.png'), 'file', 'about_us', '*') }}" alt="logo" width="187" height="202">
          </div>
          <ul class="list-none m-0 px-9 flex gap-4 flex-col justify-center w-80 mx-auto">
            <li class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
              <div>
                <a href="tel:{{ setting('phone_1', '+201000000', 'string', 'contact', '*') }}" class="font-semibold text-2xl">{{ setting('phone_1', '+201000000', 'string', 'contact', '*') }}</a>
                <a href="tel:{{ setting('phone_2', '+201000000', 'string', 'contact', '*') }}" class="font-semibold text-2xl">{{ setting('phone_2', '+201000000', 'string', 'contact', '*') }}</a>
              </div>
            </li>
            <li class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
              <div>
                <a target="_blank" href="https://wa.me/{{ setting('whatsapp', '201000000', 'string', 'contact', '*') }}" class="font-semibold text-2xl">{{ setting('whatsapp', '+201000000', 'string', 'contact', '*') }}</a>
              </div>
            </li>
            <li class="flex flex-row items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
              <div>
                <a href="mailto:{{ setting('email', 'info@oriental-eg.com', 'string', 'contact', '*') }}" class="font-semibold text-xl">{{ setting('email', 'info@oriental-eg.com', 'string', 'contact', '*') }}</a>
              </div>
            </li>
          </ul>

        </div>
        <div>
          <form action="{{ route('contactStore') }}" class="flex flex-col gap-5" method="POST">
            @csrf
            <div class="sm:w-96 w-full mx-auto">
              @if (session()->has('success'))
                <div class="bg-green-500 p-5 text-lg capitalize font-bold rounded-lg text-white">{{ session('success') }}</div>
              @endif
            </div>
            <div class="sm:w-96 w-full mx-auto">
              <input type="text" placeholder="Name"
                     name="name"
                     required
                     class="border-b-white border-x-0 border-t-0 border-b-2 px-0 py-3 text-lg
                                       text-white w-full font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none">
              @error('name') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror

            </div>
            <div class="sm:w-96 w-full mx-auto">
              <label for="phone_code" class="text-lg text-white">Phone Number</label>
              <div class="flex flex-row">
                <select type="phone_code"
                        name="phone_code"
                        required
                        id="phone_code"
                        class="border-b-white border-x-0 border-t-0 border-b-2 px-0 py-3 text-lg
                                       text-white w-80 font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none w-20">
                  <option value="+20" selected>+20</option>
                  <option value="+966">+966</option>
                </select>
                <input type="text"
                       name="phone"
                       id="phone"
                       required
                       class="border-b-white border-x-0 border-t-0 border-b-2 px-0 py-3 text-lg
                                       text-white w-80 font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none">

              </div>
              @error('phone') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror

            </div>
            <div class="sm:w-96 w-full mx-auto">
              <input type="email" placeholder="Email"
                     name="email"
                     required
                     class="border-b-white border-x-0 border-t-0 border-b-2 px-0 py-3
                               text-lg w-full
                               text-white font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent">
              @error('email') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror

            </div>
            <div class="sm:w-96 w-full mx-auto">
              <label for="interest" class="text-lg text-white">Interested in</label>
              <select name="interest"
                      id="interest"
                      class="border-white border-2 px-1 py-0 text-lg w-full mt-4
                                    focus:ring-amber-300 focus:border-amber-300
                                           text-white font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent">
                @foreach($projects as $project)
                  <option value="{{ $project->title }}">{{ $project->title }}</option>
                @endforeach
              </select>
              @error('interest') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror

            </div>
            <div class="sm:w-96 w-full mx-auto">
              <label for="message" class="text-lg text-white">Message</label>
              <textarea id="message" name="content" rows="4" class="mt-1 block w-full bg-transparent border-white border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
                            focus:ring-amber-300 focus:border-amber-300"
              ></textarea>
              @error('message') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror

            </div>
            <div class="sm:w-96 w-full mx-auto flex justify-center">
              <button type="submit" class="mc bg-black py-2 px-9 rounded-xl text-xl">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END MAIN BANNER -->

  <!-- START MAIN FOOTER -->
{{--  <section class="footer bg-black p-9">--}}
{{--    <div>--}}
{{--      <div class="grid sm:grid-cols-5 grid-cols-1">--}}
{{--        <div class="sm:col-span-2">--}}
{{--          <h2 class="mc text-lg font-bold">Contact us</h2>--}}
{{--          <ul class="list-none flex gap-4 flex-col justify-center mt-5">--}}
{{--            <li class="flex flex-row items-center gap-2">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-telephon mc-fill" viewBox="0 0 16 16">--}}
{{--                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>--}}
{{--              </svg>--}}
{{--              <div>--}}
{{--                <a href="tel:{{ setting('phone_1', '+201000000', 'string', 'contact', '*') }}" class="font-semibold text-lg text-white">--}}
{{--                  {{ setting('phone_1', '+201000000', 'string', 'contact', '*') }} ---}}
{{--                </a>--}}
{{--                <a href="tel:{{ setting('phone_2', '+201000000', 'string', 'contact', '*') }}" class="font-semibold text-lg text-white">--}}
{{--                  {{ setting('phone_2', '+201000000', 'string', 'contact', '*') }}--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="flex flex-row items-center gap-2">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-whatsapp mc-fill" viewBox="0 0 16 16">--}}
{{--                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>--}}
{{--              </svg>--}}
{{--              <div>--}}
{{--                <a href="https://wa.me/{{ setting('whatsapp', '201000000', 'string', 'contact', '*') }}" target="_blank" class="font-semibold text-lg text-white">{{ setting('whatsapp', '201000000', 'string', 'contact', '*') }}</a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="flex flex-row items-center gap-2">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-envelope mc-fill" viewBox="0 0 16 16">--}}
{{--                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>--}}
{{--              </svg>--}}
{{--              <div>--}}
{{--                <a target="_blank" href="mailto:{{ setting('email', 'info@oriental-eg.com', 'string', 'contact', '*') }}" class="font-semibold text-lg text-white">{{ setting('email', 'info@oriental-eg.com', 'string', 'contact', '*') }}</a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--            <li class="flex flex-row items-center gap-2">--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-geo-alt-fill mc-fill" viewBox="0 0 16 16">--}}
{{--                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
{{--              </svg>--}}
{{--              <div>--}}
{{--                <a href="{{ setting('location', 'https://www.google.com/maps/place/%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9', 'string', 'contact', '*') }}" class="font-semibold text-lg text-white">{{ setting('address', 'Egypt, Cairo', 'string', 'contact', '*') }}</a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--        <div class="sm:col-span-3">--}}
{{--          <form action="{{ route('contactStore') }}" method="POST">--}}
{{--            @csrf--}}
{{--            <div>--}}
{{--              @if (session()->has('success'))--}}
{{--                <div class="bg-green-500 p-1 text-lg capitalize font-bold rounded-lg text-white">{{ session('success') }}</div>--}}
{{--              @endif--}}
{{--            </div>--}}
{{--            <div class="grid sm:grid-cols-3 grid-cols-1 gap-10 mb-9">--}}
{{--              <div class="">--}}
{{--                <input type="text" placeholder="Name"--}}
{{--                       name="name"--}}
{{--                       required--}}
{{--                       class="border-b-white border-x-0 border-t-0 border-b-1 px-0 py-3 text-base placeholder-white--}}
{{--                                       text-white w-full font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none">--}}
{{--                @error('name') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror--}}

{{--              </div>--}}
{{--              <div class="">--}}
{{--                <div class="flex flex-row">--}}
{{--                  <select type="phone_code"--}}
{{--                          name="phone_code"--}}
{{--                          required--}}
{{--                          class="border-b-white border-x-0 border-t-0 border-b-1 px-0 py-3 text-base placeholder-white--}}
{{--                                       text-white w-80 font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none w-20">--}}
{{--                    <option value="egypt" selected>+20</option>--}}
{{--                    <option value="egypt">+966</option>--}}
{{--                  </select>--}}
{{--                  <input type="text"--}}
{{--                         name="phone"--}}
{{--                         required--}}
{{--                         class="border-b-white border-x-0 border-t-0 border-b-1 px-0 py-3 text-base--}}
{{--                                           placeholder-white--}}
{{--                                       text-white w-80 font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent focus:outline-none">--}}
{{--                  @error('phone') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror--}}

{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="">--}}
{{--                <input type="email" placeholder="Email"--}}
{{--                       name="email"--}}
{{--                       required--}}
{{--                       class="border-b-white border-x-0 border-t-0 border-b-2 px-0 py-3 placeholder-white--}}
{{--                               text-base w-full--}}
{{--                               text-white font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent">--}}
{{--                @error('email') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror--}}

{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="flex sm:flex-row flex-col items-center mt-9">--}}
{{--              <label for="interest" class="text-base text-white sm:w-36 w-full sm:mb-0 mb-1">Interested in</label>--}}
{{--              <select name="interest"--}}
{{--                      class="border-white border-1 px-1 py-0 text-lg w-full--}}
{{--                                    focus:ring-amber-300 focus:border-amber-300--}}
{{--                                           text-white font-semibold bg-transparent focus:border-b-amber-200 focus:ring-transparent">--}}
{{--                @foreach($projects as $project)--}}
{{--                  <option value="{{ $project->title }}">{{ $project->title }}</option>--}}
{{--                @endforeach--}}
{{--              </select>--}}
{{--              @error('interest') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror--}}

{{--            </div>--}}
{{--            <div class="flex sm:flex-row flex-col items-center mt-3">--}}
{{--              <label for="message" class="text-lg text-white sm:w-36 w-full">Message</label>--}}
{{--              <textarea name="content" rows="4" class="mt-1 block w-full bg-transparent border-white border-1 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm--}}
{{--                            focus:border-amber-200 focus:ring-transparent text-white"--}}
{{--              ></textarea>--}}
{{--              @error('content') <small class="text-red-700 text-sm">{{ $message }}</small> @enderror--}}
{{--            </div>--}}
{{--            <div class=" flex justify-center mt-4">--}}
{{--              <button type="submit" class="text-black bg-white py-2 px-9 rounded-xl text-xl">Submit</button>--}}
{{--            </div>--}}
{{--            <div class="flex flex-row mt-9 text-white text-sm justify-between">--}}
{{--              <div>--}}
{{--                All rights reserved 2022 &copy;--}}
{{--              </div>--}}
{{--              <div>--}}
{{--                <a href="{{ setting('messenger', 'https://fb.com', 'string', 'contact', '*') }}">--}}
{{--                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-chat-left-dots mc-fill" viewBox="0 0 16 16">--}}
{{--                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>--}}
{{--                    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>--}}
{{--                  </svg>--}}
{{--                </a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
  <!-- END MAIN FOOTER -->

  <!-- SCROLL TO TOP BUTTON -->
{{--  <div id="scrollToTop">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-chevron-up" viewBox="0 0 16 16">--}}
{{--      <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>--}}
{{--    </svg>--}}
{{--  </div>--}}

  <script>
    function scrollToSmoothly(pos, time) {
      var currentPos = window.pageYOffset;
      var start = null;
      if(time == null) time = 500;
      pos = +pos, time = +time;
      window.requestAnimationFrame(function step(currentTime) {
        start = !start ? currentTime : start;
        var progress = currentTime - start;
        if (currentPos < pos) {
          window.scrollTo(0, ((pos - currentPos) * progress / time) + currentPos);
        } else {
          window.scrollTo(0, currentPos - ((currentPos - pos) * progress / time));
        }
        if (progress < time) {
          window.requestAnimationFrame(step);
        } else {
          window.scrollTo(0, pos);
        }
      });
    }

    const el = document.getElementById('scrollToTop');
    el.onclick = function () {
      scrollToSmoothly(0, 500);
    }
  </script>
</x-frontend.layout.master>
