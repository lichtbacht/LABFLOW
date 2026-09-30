/* =========================================
   LUCIDE ICON
========================================= */

lucide.createIcons();



/* =========================================
   CHART
========================================= */

const chartCanvas = document.getElementById("summaryChart");

const chartData = {

    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun"
    ],

    datasets: [

        {
            label: "Lab Report",

            data: [
                63,
                75,
                86,
                65,
                92,
                45
            ],

            backgroundColor: "#247df0",

            borderRadius: 3,

            barThickness: 25
        },

        {
            label: "Stock In",

            data: [
                94,
                85,
                82,
                92,
                100,
                98
            ],

            backgroundColor: "#d9dee3",

            borderRadius: 3,

            barThickness: 25
        }

    ]

};


const summaryChart = new Chart(
    chartCanvas,
    {

        type: "bar",

        data: chartData,

        options: {

            responsive: true,

            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: "index"
            },

            plugins: {

                legend: {
                    display: false
                },

                tooltip: {
                    backgroundColor: "#222",
                    padding: 10
                }

            },

            scales: {

                x: {

                    grid: {
                        display: false
                    },

                    ticks: {
                        color: "#333",
                        font: {
                            size: 11
                        }
                    }
                },

                y: {

                    beginAtZero: true,

                    max: 120,

                    ticks: {
                        stepSize: 20,
                        color: "#555",
                        font: {
                            size: 11
                        }
                    },

                    grid: {
                        color: "#e7eaee"
                    }

                }

            }

        }

    }
);



/* =========================================
   PERIOD SELECT
========================================= */

const periodSelect =
    document.getElementById("periodSelect");

periodSelect.addEventListener(
    "change",
    function () {

        if (this.value === "12") {

            summaryChart.data.labels = [
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun"
            ];

            summaryChart.data.datasets[0].data = [
                40,
                55,
                70,
                62,
                80,
                73,
                63,
                75,
                86,
                65,
                92,
                45
            ];

            summaryChart.data.datasets[1].data = [
                70,
                78,
                82,
                90,
                85,
                88,
                94,
                85,
                82,
                92,
                100,
                98
            ];

        } else {

            summaryChart.data.labels = [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun"
            ];

            summaryChart.data.datasets[0].data = [
                63,
                75,
                86,
                65,
                92,
                45
            ];

            summaryChart.data.datasets[1].data = [
                94,
                85,
                82,
                92,
                100,
                98
            ];

        }

        summaryChart.update();

    }
);



/* =========================================
   CALENDAR
========================================= */

const calendarTitle =
    document.getElementById("calendarTitle");

const calendarDays =
    document.getElementById("calendarDays");

const prevMonth =
    document.getElementById("prevMonth");

const nextMonth =
    document.getElementById("nextMonth");


let currentDate = new Date(2025, 0, 1);



function renderCalendar() {

    calendarDays.innerHTML = "";

    const year =
        currentDate.getFullYear();

    const month =
        currentDate.getMonth();


    const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];


    calendarTitle.textContent =
        `${monthNames[month]} ${year}`;


    /*
        JavaScript:

        Sunday = 0
        Monday = 1

        Kita ubah supaya:
        Monday = 0
        Sunday = 6
    */

    let firstDay =
        new Date(year, month, 1).getDay();

    firstDay =
        firstDay === 0 ? 6 : firstDay - 1;


    const daysInMonth =
        new Date(year, month + 1, 0).getDate();


    const previousMonthDays =
        new Date(year, month, 0).getDate();


    /*
        Previous month
    */

    for (let i = firstDay - 1; i >= 0; i--) {

        const day =
            document.createElement("div");

        day.classList.add(
            "calendar-day",
            "muted"
        );

        day.textContent =
            previousMonthDays - i;

        calendarDays.appendChild(day);
    }


    /*
        Current month
    */

    for (
        let date = 1;
        date <= daysInMonth;
        date++
    ) {

        const day =
            document.createElement("div");

        day.classList.add("calendar-day");

        day.textContent = date;


        /*
            Contoh highlight
        */

        if (
            year === 2025 &&
            month === 0 &&
            date === 10
        ) {

            day.classList.add("today");

        }


        if (
            year === 2025 &&
            month === 0 &&
            date === 18
        ) {

            day.classList.add("highlight");

        }


        calendarDays.appendChild(day);

    }


    /*
        Next month
    */

    const totalCells =
        calendarDays.children.length;

    const remaining =
        42 - totalCells;


    for (
        let i = 1;
        i <= remaining;
        i++
    ) {

        const day =
            document.createElement("div");

        day.classList.add(
            "calendar-day",
            "muted"
        );

        day.textContent = i;

        calendarDays.appendChild(day);

    }

}



/* PREVIOUS */

prevMonth.addEventListener(
    "click",
    function () {

        currentDate.setMonth(
            currentDate.getMonth() - 1
        );

        renderCalendar();

    }
);



/* NEXT */

nextMonth.addEventListener(
    "click",
    function () {

        currentDate.setMonth(
            currentDate.getMonth() + 1
        );

        renderCalendar();

    }
);



/* INITIAL */

renderCalendar();