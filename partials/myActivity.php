<div class="w-[400px] relative overflow-hidden border-2 border-dashed border-gray-300 rounded-lg h-fit p-[10px] ">
    <div class="items-center flex dark:bg-gray-800 ">
        <a href="#">
            <img class="w-[200px]  h-[200px]" src="https://picsum.photos/200/300?random=<?= $key ?>" alt="Bonnie Avatar">
        </a>
        <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#"><?= $vote['candidateName'] ?></a>
            </h3>
            <span class="text-white py-[1px] px-[10px] rounded-full bg-[#ef4444]"><?= $vote['candidateParty'] ?></span>
        </div>
    </div>

    <p class="bg-[gold] z-50 w-fit px-[10px] py-[2px] rounded-r-full absolute top-5 ">
        <span><?= $vote['candidateOfficeType'] ?></span>
    </p>

</div>