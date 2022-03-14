(function(){
    const radios = document.querySelectorAll('input[type=radio]');
    const collegeSelector = document.querySelector('#college-selector');
    const clubSelector = document.querySelector('#club-selector');

    radios.forEach((radio) => {
        radio.addEventListener('change', (e) => {
            const type = e.target.value;

            if(type === 'college'){
                collegeSelector.name = 'owner';
                clubSelector.name = '';

                clubSelector.classList.add('hidden');
                collegeSelector.classList.remove('hidden');
            } else if (type === 'club'){
                clubSelector.name = 'owner';
                collegeSelector.name = '';

                collegeSelector.classList.add('hidden');
                clubSelector.classList.remove('hidden');
            }
        });
    });
})();
