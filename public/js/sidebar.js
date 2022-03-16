(function(){

    // Button Declarations
    const collegeMenu = document.querySelector('#college-menu');
    const clubMenu = document.querySelector('#club-menu');
    const teamMenu = document.querySelector('#team-menu');
    const matchMenu = document.querySelector('#match-menu');

    // Section Declarations
    const collegeSection = document.querySelector('#college-section');
    const clubSection = document.querySelector('#club-section');
    const teamSection = document.querySelector('#team-section');
    const matchSection = document.querySelector('#match-section');

    // Expand/Collapse Icons
    const collegeIcon = document.querySelector('#college-icon');
    const clubIcon = document.querySelector('#club-icon');
    const teamIcon = document.querySelector('#team-icon');
    const matchIcon = document.querySelector('#match-icon');

    // Current URL
    const url = window.location.href;

    if(url.includes('college')){
        collegeSection.classList.toggle('hidden');

        collegeMenu.classList.add('text-gray-700', 'font-semibold');

        collegeIcon.classList.remove('fa-angle-right');
        collegeIcon.classList.add('fa-angle-down');
    }

    if(url.includes('club')){
        clubSection.classList.toggle('hidden');

        clubMenu.classList.add('text-gray-700', 'font-semibold');

        clubIcon.classList.remove('fa-angle-right');
        clubIcon.classList.add('fa-angle-down');
    }

    if(url.includes('team')){
        teamSection.classList.toggle('hidden');

        teamMenu.classList.add('text-gray-700', 'font-semibold');

        teamIcon.classList.remove('fa-angle-right');
        teamIcon.classList.add('fa-angle-down');
    }

    if(url.includes('match')){
        matchSection.classList.toggle('hidden');

        matchMenu.classList.add('text-gray-700', 'font-semibold');

        matchIcon.classList.remove('fa-angle-right');
        matchIcon.classList.add('fa-angle-down');
    }

    collegeMenu.addEventListener('click', (e) => {

        if(e.target.id === 'college-menu'){

            if(collegeSection.classList.contains('hidden')){
                collegeIcon.classList.remove('fa-angle-right');
                collegeIcon.classList.add('fa-angle-down');
            } else {
                collegeIcon.classList.remove('fa-angle-down');
                collegeIcon.classList.add('fa-angle-right');
            }

            collegeSection.classList.toggle('hidden');
        }
    });

    clubMenu.addEventListener('click', (e) => {

        if(e.target.id === 'club-menu'){

            if(clubSection.classList.contains('hidden')){
                clubIcon.classList.remove('fa-angle-right');
                clubIcon.classList.add('fa-angle-down');
            } else {
                clubIcon.classList.remove('fa-angle-down');
                clubIcon.classList.add('fa-angle-right');
            }

            clubSection.classList.toggle('hidden');
        }
    });

    teamMenu.addEventListener('click', (e) => {

        if(e.target.id === 'team-menu'){

            if(teamSection.classList.contains('hidden')){
                teamIcon.classList.remove('fa-angle-right');
                teamIcon.classList.add('fa-angle-down');
            } else {
                teamIcon.classList.remove('fa-angle-down');
                teamIcon.classList.add('fa-angle-right');
            }

            teamSection.classList.toggle('hidden');
        }
    });

    matchMenu.addEventListener('click', (e) => {

        if(e.target.id === 'match-menu'){

            if(matchSection.classList.contains('hidden')){
                matchIcon.classList.remove('fa-angle-right');
                matchIcon.classList.add('fa-angle-down');
            } else {
                matchIcon.classList.remove('fa-angle-down');
                matchIcon.classList.add('fa-angle-right');
            }

            matchSection.classList.toggle('hidden');
        }
    });

})();

var sidebar = document.querySelector('#sidebar');
function sidebarToggle() {

    if (sidebar.classList.contains('md:block')) {

        sidebar.classList.remove('md:block');
        sidebar.classList.remove('lg:block');

        if (window.matchMedia('(min-width:640px)').matches) {
            sidebar.classList.add('hidden');
        } else {
            sidebar.classList.remove('hidden');
        }
    } else {
        sidebar.classList.add('md:block');
        sidebar.classList.add('lg:block');

        sidebar.classList.add('hidden');
    }
}
