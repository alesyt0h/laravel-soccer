(function(){

    // Button Declarations
    const collegeBtn = document.querySelector('#college-btn');
    const clubBtn = document.querySelector('#club-btn');
    const teamBtn = document.querySelector('#team-btn');
    const matchBtn = document.querySelector('#match-btn');

    // Section Declarations
    const collegeSection = document.querySelector('#college-section');
    const clubSection = document.querySelector('#club-section');
    const teamSection = document.querySelector('#team-section');
    const matchSection = document.querySelector('#match-section');

    // Expand/Collapse Icons
    const collegeExpand = document.querySelector('#college-expand');
    const collegeCollapse = document.querySelector('#college-collapse');
    const clubExpand = document.querySelector('#club-expand');
    const clubCollapse = document.querySelector('#club-collapse');
    const teamExpand = document.querySelector('#team-expand');
    const teamCollapse = document.querySelector('#team-collapse');
    const matchExpand = document.querySelector('#match-expand');
    const matchCollapse = document.querySelector('#match-collapse');

    // Current URL
    const url = window.location.href;

    if(url.includes('college')){
        collegeSection.classList.toggle('hidden');

        collegeExpand.classList.add('hidden');
        collegeCollapse.classList.remove('hidden')
    }

    if(url.includes('club')){
        clubSection.classList.toggle('hidden');

        clubExpand.classList.add('hidden');
        clubCollapse.classList.remove('hidden')
    }

    if(url.includes('team')){
        teamSection.classList.toggle('hidden');

        teamExpand.classList.add('hidden');
        teamCollapse.classList.remove('hidden')
    }

    if(url.includes('match')){
        matchSection.classList.toggle('hidden');

        matchExpand.classList.add('hidden');
        matchCollapse.classList.remove('hidden')
    }

    collegeBtn.addEventListener('click', () => {
        collegeSection.classList.toggle('hidden');

        if(collegeSection.classList.contains('hidden')){
            collegeExpand.classList.remove('hidden');
            collegeCollapse.classList.add('hidden')
        } else {
            collegeExpand.classList.add('hidden');
            collegeCollapse.classList.remove('hidden')
        }
    });

    clubBtn.addEventListener('click', () => {
        clubSection.classList.toggle('hidden');

        if(clubSection.classList.contains('hidden')){
            clubExpand.classList.remove('hidden');
            clubCollapse.classList.add('hidden')
        } else {
            clubExpand.classList.add('hidden');
            clubCollapse.classList.remove('hidden')
        }
    });

    teamBtn.addEventListener('click', () => {
        teamSection.classList.toggle('hidden');

        if(teamSection.classList.contains('hidden')){
            teamExpand.classList.remove('hidden');
            teamCollapse.classList.add('hidden')
        } else {
            teamExpand.classList.add('hidden');
            teamCollapse.classList.remove('hidden')
        }
    });

    matchBtn.addEventListener('click', () => {
        matchSection.classList.toggle('hidden');

        if(matchSection.classList.contains('hidden')){
            matchExpand.classList.remove('hidden');
            matchCollapse.classList.add('hidden')
        } else {
            matchExpand.classList.add('hidden');
            matchCollapse.classList.remove('hidden')
        }
    });

})();

function mobileMenuOpener(){
    document.querySelector('aside').classList.remove('hidden');
    document.querySelector('#sidebar-show').classList.toggle('hidden');
}
function mobileMenuCloser(){
    document.querySelector('aside').classList.add('hidden');
    document.querySelector('#sidebar-show').classList.toggle('hidden');
}
