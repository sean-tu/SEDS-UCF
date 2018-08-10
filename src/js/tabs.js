window.onload = init;
var tabs = new Array();

function init() {
    initTabs();
    document.getElementById('nav-icon').addEventListener('click', navToggle);
    console.log('init');
}

function initTabs() {
    console.log('init tabs');
    var tabDiv = document.getElementById('tabs');
    if (tabDiv == null) return;
    tabs = tabDiv.children;
    for (var t=0; t<tabs.length; t++) {
        tabs[t].addEventListener('click', changeTab, false);
    }
    clearTabs();
    activateTab(tabs[0]);
}

function clearTabs() {

    for (var i=0; i<tabs.length; i++) {
        var t = tabs[i];
        t.classList.remove('tab-active');
        var id = t.getAttribute('data-tab');
        document.getElementById(id).style.display = 'none';
    }
}

function changeTab(e) {
    e.preventDefault();
    clearTabs();
    activateTab(e.target);
}

function activateTab(tabElement) {
    tabElement.classList.add('tab-active');
    var selectedID = tabElement.getAttribute('data-tab');
    document.getElementById(selectedID).style.display = 'block';
}

//
// Nav
//
function navToggle() {
    console.log('nav toggle');
    var nav = document.getElementById('navigation');
    if (nav.style.display == 'none')
    {
        nav.style.display = 'block';
    }
    else {
        nav.style.display = 'none';
    }
    // if (nav.classList.contains('expanded')) {
    //     nav.classList = 'collapsed';
    // }
    // else {
    //     nav.classList = 'expanded';
    // }
}