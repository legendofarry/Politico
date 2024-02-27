<div class="h-fit overflow-x-auto  mb-[80px]">
    <h1 class="mb-[10px] text-4xl font-extrabold text-[black] ml-[20px]"><?= $officeType['officeType'] ?></h1>
    <div class="h-fit flex w-fit">
        <ul class="flex gap-[20px] ">

            <?php
            require("query/candidatesRunningModalGovernor.php");
            ?>

        </ul>

    </div>
</div>