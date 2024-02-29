<div class="w-[400px] relative overflow-hidden border-2 border-dashed border-gray-300 rounded-lg h-fit p-[10px] ">
    <div class="items-center flex dark:bg-gray-800 ">
        <a href="#">
            <img class="w-[200px]  h-[200px]" src="https://picsum.photos/200/300?random=<?= $key ?>" alt="Bonnie Avatar">
        </a>
        <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#"><?= $candidate['fullname'] ?></a>
            </h3>
            <span class="text-white py-[1px] px-[10px] rounded-full bg-[#ef4444]"><?= $candidate['party'] ?></span>
            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?= $candidate['officeType'] ?></p>
        </div>
    </div>

    <form action="query/vote.php" method="POST">
        <input type="hidden" name="votes" value="<?= $candidate['votes'] ?>">
        <input type="hidden" name="candidate_id" value="<?= $candidate['id'] ?>">
        <input type="hidden" name="candidateName" value="<?= $candidate['fullname'] ?>">
        <input type="hidden" name="candidateOfficeType" value="<?= $candidate['officeType'] ?>">
        <input type="hidden" name="candidateParty" value="<?= $candidate['party'] ?>">
        <button type="submit" value="vote" class="voteBtn absolute bottom-2.5 right-2.5 cursor-pointer bg-white px-[6px] pt-[10px] rounded-tl-lg hover:bg-[gold]">
            <svg viewBox="0 0 60 60" height="50" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .a,
                        .c,
                        .d {
                            fill: none;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                        }

                        .a {
                            stroke: #1c4db8;
                        }

                        .a,
                        .d {
                            stroke-width: 1.5px;
                        }

                        .b {
                            fill: #e82e5f;
                        }

                        .c,
                        .d {
                            stroke: #e82e5f;
                        }

                        .c {
                            stroke-width: 2.5px;
                        }
                    </style>
                </defs>
                <title />
                <path class="a" d="M33.137,35.792H15.123a4,4,0,0,1-4-4V23.1a4,4,0,0,1,4-4H44.432a4,4,0,0,1,4,4v8.693a4,4,0,0,1-4,4" />
                <path class="a" d="M33.137,41.27H17c-6.522,0-5.855-6.454-5.855-8.67l-.025-.808" />
                <path class="a" d="M48.427,31.792v3.76a5.983,5.983,0,0,1-.976,3.453" />
                <path class="b" d="M15.1,24.431a18.856,18.856,0,0,1,1.517,3.848,4.562,4.562,0,0,0,1.848,3.056,1.008,1.008,0,0,0,1.368-.359,50.911,50.911,0,0,1,3.6-6.481,1,1,0,1,0-1.727-1.01,50.923,50.923,0,0,0-3.6,6.482l1.368-.359c-.052-.029-.1-.061-.154-.092.08.049.058.058,0-.006-.046-.045-.237-.272-.133-.125a2.735,2.735,0,0,1-.208-.344c-.028-.054-.054-.109-.08-.164-.067-.142.049.133-.006-.016-.192-.519-.318-1.056-.477-1.584a21.652,21.652,0,0,0-1.584-3.856,1,1,0,0,0-1.727,1.01Z" />
                <path class="b" d="M32.926,24.535a58.215,58.215,0,0,1,.274,5.992,1,1,0,0,0,2,0,58.215,58.215,0,0,0-.274-5.992,1,1,0,1,0-2,0Z" />
                <path class="b" d="M30.9,25.67a38.3,38.3,0,0,0,6.138-.584,1,1,0,0,0,.7-1.23,1.03,1.03,0,0,0-1.23-.7c-.535.085-1.07.171-1.606.25l-.353.05c-.222.032.163-.019-.076.011-.222.027-.444.055-.666.078a27.646,27.646,0,0,1-2.906.124,1,1,0,1,0,0,2Z" />
                <path class="b" d="M42.328,22.41a20.027,20.027,0,0,0-2.841.237,1.334,1.334,0,0,0-1.152.968,6.427,6.427,0,0,0-.045,1.507,31.229,31.229,0,0,1-.546,5.266,1.015,1.015,0,0,0,1.23,1.23l3.686-.686a1.01,1.01,0,0,0,.7-1.23,1.023,1.023,0,0,0-1.231-.7l-3.686.687,1.231,1.23c.221-1.193.4-2.4.506-3.6q.075-.858.1-1.72c.007-.273.012-.545.013-.817,0-.139,0-.278,0-.417,0-.094,0-.188,0-.282.007-.18-.005-.134-.036.141l-.359.358c-.15.094.014.014.126,0l.139-.021c.247-.033.5-.058.744-.079.475-.041.951-.061,1.427-.066a1,1,0,0,0,0-2Z" />
                <path class="b" d="M39.2,27.866a14.248,14.248,0,0,0,3.271-.6,1.01,1.01,0,0,0,.7-1.23,1.02,1.02,0,0,0-1.231-.7,21.5,21.5,0,0,1-2.237.515l.266-.036a6.8,6.8,0,0,1-.768.053,1,1,0,0,0,0,2Z" />
                <ellipse class="c" cx="26.916" cy="27.297" rx="2.529" ry="3.405" />
                <line class="d" x1="30" x2="30" y1="5.774" y2="11.633" />
                <line class="d" x1="46.456" x2="43.461" y1="8.439" y2="13.475" />
                <line class="d" x1="56.898" x2="52.326" y1="19.891" y2="22.689" />
                <line class="d" x1="58.5" x2="55.236" y1="35.365" y2="35.139" />
                <line class="d" x1="13.544" x2="16.539" y1="8.439" y2="13.475" />
                <line class="d" x1="3.102" x2="7.674" y1="19.891" y2="22.689" />
                <line class="d" x1="1.5" x2="4.764" y1="35.365" y2="35.139" />
                <path class="b" d="M42.012,42.08l3.255-1.739a.444.444,0,0,0,.054-.748l-9.283-6.878a.444.444,0,0,0-.708.377l.559,11.541A.443.443,0,0,0,36.54,45L39.8,43.263l3.635,6.8a.444.444,0,0,0,.6.182l1.431-.765a.444.444,0,0,0,.183-.6Z" />
            </svg>
        </button>

    </form>

    <p class="bg-[gold] z-50 w-fit px-[10px] py-[2px] rounded-r-full absolute top-5 ">Vote(s)
        <span><?= $candidate['votes'] ?></span>
    </p>

</div>