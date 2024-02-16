<?php
require("query/config.php");
require("query/middleware/is-logged-in.php");
// die('dfsf');
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PARTY</title>
</head>

<body class="font-['Montserrat'] font-semibold">
    <h1 class="text-2xl text-center">Welcome to the PARTY
        <?= $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] ?>
    </h1>

    <main class="mt-[100px]">
        <div class="relative">

            <button onclick="displayCreatePartyPage()" type="button" class="createBtn inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                <span>Create party</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>



            <div class="displayCreatePartyPageDiv hidden absolute left-1/2 z-10 mt-5 flex  w-[60%]  -translate-x-1/2 px-4 ">
                <div class="  flex-auto overflow-hidden  bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">

                    <form action="query/party.php" method="POST">
                        <div class="space-y-12 ">
                            <div class="border-b border-gray-900/10 pb-12 ">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Party Profile</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Some of these information will be
                                    displayed
                                    publicly on your Party Profile.</p>


                                <div class="profileSection mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                                    <div class="titleDiv sm:col-span-4">
                                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">symbols
                                                    not allowed</span>
                                                <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 outline-none">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="aboutDiv col-span-full">
                                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                        <div class="mt-2">
                                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about
                                            your Party</p>
                                    </div>

                                    <div class="photoDiv col-span-full">
                                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                                            photo</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="locationDiv sm:col-span-4">
                                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">location</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Just
                                                    type the location for your business </span>
                                                <input type="text" name="location" id="location" autocomplete="location" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 outline-none">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <!-- <div class="personalInfoSection border-b border-gray-900/10 pb-12">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Admin Information
                                    </h2>
                                    <p class="mt-1 text-lg leading-6 text-gray-600 font-bold">ADMIN</p>

                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                        <div class="nameDiv sm:col-span-3">
                                            <div class="mt-2">
                                                <label for="Username"
                                                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                                    <input type="text" id="Username"
                                                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 py-[5px] px-[15px]"
                                                        placeholder="Username" />

                                                    <span
                                                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                        Full names
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="emailDiv sm:col-span-4">
                                            <label for="Username"
                                                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                                <input type="text" id="Username"
                                                    class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 py-[5px] px-[15px]"
                                                    placeholder="Username" />

                                                <span
                                                    class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                    Email Address
                                                </span>
                                            </label>
                                        </div>

                                        <div class="countryDiv sm:col-span-3">
                                            <div>
                                                <label for="HeadlineAct"
                                                    class="block text-sm font-medium text-gray-900"> Country </label>

                                                <div class="relative mt-1.5">
                                                    <input type="text" list="HeadlineActArtist" id="HeadlineAct"
                                                        class="py-[10px] px-[15px] w-full rounded-lg border-gray-300 pe-10 text-gray-700 sm:text-sm [&::-webkit-calendar-picker-indicator]:opacity-0"
                                                        placeholder="Please select" />

                                                    <span class="absolute inset-y-0 end-0 flex w-8 items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-5 text-gray-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <datalist name="HeadlineAct" id="HeadlineActArtist" class="">
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="United States of America">United States of America
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Zambia">Zambia</option>
                                                </datalist>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->


                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>


                    <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                            </svg>
                            Watch demo
                        </a>
                        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                            </svg>
                            Contact sales
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
    require("query/party.view.php");
    showPartyResult();
    ?>

</body>

</html>
<script>
    function displayCreatePartyPage() {
        document.querySelector('.displayCreatePartyPageDiv').classList.toggle('hidden');
    }
</script>