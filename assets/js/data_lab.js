/* =========================================
   LUCIDE
========================================= */

lucide.createIcons();



/* =========================================
   DATA LAB
========================================= */

const laboratories = [

    {
        id: 1,
        name: "Lab RPL",
        status: "active",
        statusText: "Active",
        floor: "3rd Floor",
        image: "lab.jpg",
        link: "Lab_rpl/lab_rpl.php"
    },

    {
        id: 2,
        name: "Lab TKJ",
        status: "active",
        statusText: "Active",
        floor: "3rd Floor",
        image: "lab.jpg",
        link: "Lab_tkj/lab_tkj.php"
    },

    {
        id: 3,
        name: "Lab TIK",
        status: "maintenance",
        statusText: "Maintenance",
        floor: "3rd Floor",
        image: "lab.jpg",
        link: "Lab_tik/lab_tik.php"
    },

    {
        id: 4,
        name: "Lab ANM",
        status: "active",
        statusText: "Active",
        floor: "1st Floor",
        image: "lab.jpg",
        link: "Lab_animasi/lab_animasi.php"
    },

    {
        id: 5,
        name: "Lab DKV",
        status: "active",
        statusText: "Active",
        floor: "2nd Floor",
        image: "lab.jpg",
        link: "Lab_dkv/lab_dkv.php"
    },

    {
        id: 6,
        name: "Lab Multimedia",
        status: "active",
        statusText: "Active",
        floor: "2nd Floor",
        image: "lab.jpg",
        link: "Lab_bc/lab_bc.php"
    },

    {
        id: 7,
        name: "Lab 1",
        status: "maintenance",
        statusText: "Maintenance",
        floor: "1st Floor",
        image: "lab.jpg",
        link: "Lab_1/lab_1.php"
    },

    {
        id: 8,
        name: "Lab 2",
        status: "active",
        statusText: "Active",
        floor: "1st Floor",
        image: "lab.jpg",
        link: "Lab_2/lab_2.php"
    }

];



/* =========================================
   ELEMENT
========================================= */

const labGrid =
    document.getElementById("labGrid");

const searchInput =
    document.getElementById("searchInput");

const statusFilter =
    document.getElementById("statusFilter");

const emptyState =
    document.getElementById("emptyState");



/* =========================================
   RENDER LAB
========================================= */

function renderLabs(data) {

    labGrid.innerHTML = "";


    /* Tidak ditemukan */

    if (data.length === 0) {

        emptyState.classList.add("show");

        return;
    }


    emptyState.classList.remove("show");


    /* Buat card */

    data.forEach(lab => {

        const card =
            document.createElement("div");


        card.classList.add("lab-card");


        /*
            Background
        */

        card.style.backgroundImage =
            `url('${lab.image}')`;


        /*
            Isi Card
        */

        card.innerHTML = `

            <div class="lab-name">
                ${lab.name}
            </div>


            <div class="lab-status ${lab.status}">

                <span class="status-dot"></span>

                <span>
                    ${lab.statusText}
                </span>

            </div>


            <div class="lab-floor">
                ${lab.floor}
            </div>

        `;



            

        /*
            Masukkan ke grid
        */

        card.addEventListener("click", () => {
            window.location.href = lab.link;
        });

        labGrid.appendChild(card);

    });

}



/* =========================================
   SEARCH + FILTER
========================================= */

function filterLabs() {

    const searchValue =
        searchInput.value
        .toLowerCase()
        .trim();


    const filterValue =
        statusFilter.value;


    const filteredLabs =
        laboratories.filter(lab => {


            /*
                SEARCH
            */

            const matchesSearch =
                lab.name
                .toLowerCase()
                .includes(searchValue);


            /*
                FILTER STATUS
            */

            const matchesStatus =
                filterValue === "all" ||
                lab.status === filterValue;


            return (
                matchesSearch &&
                matchesStatus
            );

        });


    renderLabs(filteredLabs);

}



/* =========================================
   SEARCH
========================================= */

searchInput.addEventListener(
    "input",
    filterLabs
);



/* =========================================
   FILTER
========================================= */

statusFilter.addEventListener(
    "change",
    filterLabs
);



/* =========================================
   INITIAL
========================================= */

renderLabs(laboratories);