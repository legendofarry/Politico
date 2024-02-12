<?php require('views/partials/head.php') ?>


<div class="flex h-[full] flex-col justify-center  lg:px-8 w-[50%]  mx-auto mt-[10%]">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company">
        <h2 class="my-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up
        </h2>
        <p class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a
            14
            day free
            trial</p>
    </div>

    <div class="mt-10 ">
        <form class=" " action="views/registration/register.view.php" method="POST">
            <div class="names flex justify-between w-full mb-[25px]">
                <div class="firstName w-[32.5%]">
                    <label for="firstName" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <div class="mt-2">
                        <input id="firstName" name="firstName" type="firstName" autocomplete="firstName" required
                            placeholder="first name"
                            class="block w-full rounded-md border-0 py-1.5 px-[10px] text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>

                <div class="lastName w-[32.5%]">
                    <label for="lastName" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input id="lastName" name="lastName" type="lastName" autocomplete="lastName" required
                            placeholder="last name"
                            class="block w-full rounded-md border-0 py-1.5  px-[10px] text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>

                <div class="otherName w-[32.5%]">
                    <label for="otherName" class="block text-sm font-medium leading-6 text-gray-900">Other name</label>
                    <div class="mt-2">
                        <input id="otherName" name="otherName" type="otherName" autocomplete="otherName" required
                            placeholder="other name"
                            class="block w-full rounded-md border-0 py-1.5  px-[10px] text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
            </div>

            <div class="contacts flex justify-between mb-[25px]">
                <div class="email w-[49%]">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            placeholder="example@gmail.com"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-[10px]">
                    </div>
                </div>

                <div class="phoneNumber w-[49%]">
                    <label for="phoneNumber" class="block text-sm font-medium leading-6 text-gray-900">Phone
                        Number</label>
                    <div class="mt-2">
                        <input id="phoneNumber" name="phoneNumber" type="number" autocomplete="phoneNumber" required
                            placeholder="(+254) 0742 *** ***"
                            class="block w-full rounded-md border-0 py-1.5 px-[10px] text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
            </div>

            <div class="isAdmin flex items-center gap-[10px] mb-[25px]">
                <label for="isAdmin" class="block text-sm font-medium leading-6 text-gray-900">Admin</label>
                <input type="checkbox" id="isAdmin" name="isAdmin" type="isAdmin" autocomplete="isAdmin"
                    class="rounded-full border-2">
            </div>

            <div class="password flex flex-col items-center justify-between w-[70%] mx-auto mb-[15px]">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>


            <div class="w-[70%] mx-auto">
                <button type="submit" name="registerBtn"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Sign
                    in</button>
            </div>
        </form>
        <a href="views/registration/register.view.php">
            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?
            </p>
        </a>

    </div>
</div>

<?php require('views/partials/footer.php') ?>