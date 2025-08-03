<script>
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebarToggleOpen = document.getElementById("sidebar-toggle-open");
    const sidebarToggleClose = document.getElementById(
        "sidebar-toggle-close"
    );
    const sidebarOverlay = document.getElementById("sidebar-overlay");
    const logoText = document.getElementById("logo-text");
    const logoIcon = document.getElementById("logo-icon");
    const menuTitle = document.getElementById("menu-title");
    const othersTitle = document.getElementById("others-title");
    let sidebarCollapsed = window.innerWidth < 1024;

    if (window.innerWidth >= 1024) {
        sidebar.classList.add("sidebar-expanded");
        sidebar.classList.remove("sidebar-collapsed");
        sidebarCollapsed = false;
    } else {
        sidebar.classList.add("sidebar-collapsed");
        sidebar.classList.remove("sidebar-expanded");
        sidebarCollapsed = true;
    }

    function toggleSidebar() {
        sidebarCollapsed = !sidebarCollapsed;

        if (sidebarCollapsed) {
            sidebar.classList.remove("sidebar-expanded");
            sidebar.classList.add("sidebar-collapsed");
            sidebarToggleOpen.classList.add("hidden");
            sidebarToggleClose.classList.remove("hidden");

            if (window.innerWidth < 1024) {
                sidebarOverlay.classList.add("hidden");
            }

            if (window.innerWidth >= 1024) {
                document
                    .querySelectorAll("#logo-text")[1]
                    .classList.add("lg:hidden");
                logoIcon.classList.remove("hidden");
                menuTitle.classList.add("lg:hidden");
                othersTitle.classList.add("lg:hidden");
                document
                    .querySelectorAll(".menu-label")
                    .forEach((e) => e.classList.add("lg:hidden"));
            }
        } else {
            sidebar.classList.remove("sidebar-collapsed");
            sidebar.classList.add("sidebar-expanded");
            sidebarToggleOpen.classList.remove("hidden");
            sidebarToggleClose.classList.add("hidden");

            if (window.innerWidth < 1024) {
                sidebarOverlay.classList.remove("hidden");
            }

            if (window.innerWidth >= 1024) {
                document
                    .querySelectorAll("#logo-text")[1]
                    .classList.remove("lg:hidden");
                logoIcon.classList.add("hidden");
                menuTitle.classList.remove("lg:hidden");
                othersTitle.classList.remove("lg:hidden");
                document
                    .querySelectorAll(".menu-label")
                    .forEach((e) => e.classList.remove("lg:hidden"));
            }
        }
    }

    sidebarToggle.addEventListener("click", toggleSidebar);

    sidebarOverlay.addEventListener("click", function() {
        if (window.innerWidth < 1024 && !sidebarCollapsed) {
            toggleSidebar();
        }
    });

    window.addEventListener("resize", function() {
        if (window.innerWidth >= 1024) {
            sidebarOverlay.classList.add("hidden");
            if (sidebarCollapsed) {
                sidebar.classList.add("sidebar-expanded");
                sidebar.classList.remove("sidebar-collapsed");
            }
        } else {
            if (!sidebarCollapsed) {
                sidebarOverlay.classList.remove("hidden");
            }
        }
    });

    document.querySelectorAll("a[data-menu]").forEach((menuLink) => {
        menuLink.addEventListener("click", function(e) {
            e.preventDefault();
            const parentLi = menuLink.parentElement;
            const dropdown = parentLi.querySelector(".menu-dropdown");
            const arrow = menuLink.querySelector(".menu-arrow");

            document.querySelectorAll(".menu-dropdown").forEach((d) => {
                if (d !== dropdown) d.classList.add("hidden");
            });
            document.querySelectorAll(".menu-arrow").forEach((a) => {
                if (a !== arrow) a.classList.remove("rotate-180");
            });

            if (dropdown) {
                const isOpen = !dropdown.classList.contains("hidden");
                if (isOpen) {
                    dropdown.classList.add("hidden");
                    arrow.classList.remove("rotate-180");
                } else {
                    dropdown.classList.remove("hidden");
                    arrow.classList.add("rotate-180");
                }
            }
        });
    });
</script>
<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Revenue Overview Chart
    const ctx = document.getElementById("revenueChart").getContext("2d");
    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                label: "Revenue",
                data: [12000, 15000, 14000, 17000, 16000, 19000, 22000],
                borderColor: "#667eea",
                backgroundColor: "rgba(102, 126, 234, 0.1)",
                tension: 0.4,
                fill: true,
                pointBackgroundColor: "#667eea",
                pointBorderColor: "#fff",
                pointRadius: 5,
                pointHoverRadius: 7,
            }, ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: "#6b7280",
                        font: {
                            family: "Outfit",
                            weight: "500"
                        },
                    },
                },
                y: {
                    grid: {
                        color: "#e5e7eb"
                    },
                    ticks: {
                        color: "#6b7280",
                        font: {
                            family: "Outfit",
                            weight: "500"
                        },
                    },
                },
            },
        },
    });
</script>
