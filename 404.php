<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>404</title>
    </head>


    <body class="relative">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="  relative flex justify-center mt-[350px]">

                <div class="flex h-fit items-center justify-center p-4 text-center sm:items-center sm:p-0">

                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                        PAGE NOT FOUND</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Sorry, we could not find the page you
                                            requested.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="button" onclick="pageDropdown"
                                class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Perhaps
                                ...</button>
                            <a href="javascript:history.back()"><button type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Go
                                    back</button></a>

                        </div>
                    </div>
                </div>

                <div
                    class=" flex  justify-center ml-[900px]  absolute top-20 right-1/4 perphapsDrop hidden transition ease-out duration-100">
                    <div class="relative inline-block text-left">

                        <div class="pb-[20px] absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="/"
                                    class="hover:bg-red-500 hover:text-white text-gray-700 block px-4 py-4  text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Homepage</a>
                                <a href="#"
                                    class="hover:bg-red-500 hover:text-white text-gray-700 block px-4 py-4 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-1">Support Page</a>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <script>

            const btn = document.querySelector('.perphapsDrop');

            addEventListener('click', () => {
                btn.classList.toggle('hidden');
            })
        </script>
    </body>

</html>