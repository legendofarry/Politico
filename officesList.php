<div class="border-2 border-dashed border-gray-300 rounded-lg h-48 ">

    <div class="flex justify-around flex-col">
        <div>
            <h1 class=""><?= $office['officeType'] ?></h1>
        </div>

        <button onclick="createOffice()" type="submit" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-24">
            <svg viewBox="0 0 32 32" class="mr-2" height=" 24" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                        }
                    </style>
                </defs>
                <title />
                <g data-name="Layer 2" id="Layer_2">
                    <path d="M16,29A13,13,0,1,1,29,16,13,13,0,0,1,16,29ZM16,5A11,11,0,1,0,27,16,11,11,0,0,0,16,5Z" />
                    <path d="M16,23a1,1,0,0,1-1-1V10a1,1,0,0,1,2,0V22A1,1,0,0,1,16,23Z" />
                    <path d="M22,17H10a1,1,0,0,1,0-2H22a1,1,0,0,1,0,2Z" />
                </g>
                <g id="frame">
                    <rect class="cls-1" height="32" width="32" />
                </g>
            </svg>

            Vie
        </button>
    </div>

    <div class="createOfficeDiv hidden relative p-4 bg-white rounded-lg shadow sm:p-5">
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Vie for:
            </h3>

        </div>
        <!-- Modal body -->
        <form action="query/saveCandidate.php" method="POST">
            <div class="flex flex-col mb-4 ">

                <div class="flex">

                    <div class="input-container">
                        <input placeholder="fullnames" name="fullnames" class="input-field" type="text">
                        <label for="input-field" class="input-label">Full Names</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>

                <div class="input-container">
                    <input placeholder="Office type" name="officeType" class="input-field" type="text">
                    <label for="input-field" class="input-label">Type</label>
                    <span class="input-highlight"></span>
                </div>

                <div class="flex">
                    <div class="input-container">
                        <input placeholder="Email" name="email" class="input-field" type="text">
                        <label for="input-field" class="input-label">Email</label>
                        <span class="input-highlight"></span>
                    </div>

                    <div class="input-container">
                        <input placeholder="Phone number" name="phoneNumber" class="input-field" type="search">
                        <label for="input-field" class="input-label">Phone number</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>

                <div class="flex">
                    <div class="input-container">
                        <input placeholder="Party" name="party" class="input-field" type="text">
                        <label for="input-field" class="input-label">Party</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>

            </div>

            <div class="flex items-center space-x-4">
                <button type="submit" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <svg viewBox="0 0 32 32" class="mr-2" height=" 24" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <title />
                        <g data-name="Layer 2" id="Layer_2">
                            <path d="M16,29A13,13,0,1,1,29,16,13,13,0,0,1,16,29ZM16,5A11,11,0,1,0,27,16,11,11,0,0,0,16,5Z" />
                            <path d="M16,23a1,1,0,0,1-1-1V10a1,1,0,0,1,2,0V22A1,1,0,0,1,16,23Z" />
                            <path d="M22,17H10a1,1,0,0,1,0-2H22a1,1,0,0,1,0,2Z" />
                        </g>
                        <g id="frame">
                            <rect class="cls-1" height="32" width="32" />
                        </g>
                    </svg>

                    Save
                </button>
            </div>
        </form>
    </div>

</div>

<script>
    function createOffice() {
        document.querySelector('.createOfficeDiv').classList.toggle('hidden');
    }
</script>

<!-- <div class="card-container">
        <span class="party pro"><?= $office['party'] ?></span>
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3 class="officeType"><?= $office['title'] ?></h3>
        <h6></h6>
        <p> <?= $office['officeType'] ?></p>

        <div class="buttons">
            <button class="primary">
                Vote
            </button>
            <button class="primary ghost">
                View Candidates
            </button>
        </div>

    </div> -->