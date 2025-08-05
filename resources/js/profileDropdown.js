const profileButton = document.getElementById("profile-button");
const profileDropdown = document.getElementById("profile-dropdown");
let isDropdownOpen = false;

profileButton.addEventListener("click", function (e) {
    e.stopPropagation();
    toggleDropdown();
});

document.addEventListener("click", function (e) {
    if (
        !profileButton.contains(e.target) &&
        !profileDropdown.contains(e.target)
    ) {
        closeDropdown();
    }
});

document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        closeDropdown();
    }
});

function toggleDropdown() {
    if (isDropdownOpen) {
        closeDropdown();
    } else {
        openDropdown();
    }
}

function openDropdown() {
    profileDropdown.classList.remove("opacity-0", "invisible", "scale-95");
    profileDropdown.classList.add("opacity-100", "visible", "scale-100");
    isDropdownOpen = true;
}

function closeDropdown() {
    profileDropdown.classList.remove("opacity-100", "visible", "scale-100");
    profileDropdown.classList.add("opacity-0", "invisible", "scale-95");
    isDropdownOpen = false;
}
