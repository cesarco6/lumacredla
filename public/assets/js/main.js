$(function() {

    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    
    $('.select').click(function(event) {
        event.stopPropagation();
    });
    
    $('.select .select-control').click(function() {
        $(this).parent().next().toggle();
    })
    
    $('.select .dropdown li').click(function() {
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })

    $('[data-toggle="tooltip"]').tooltip();


    $(document).ready(function() {
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $('#slider-service').slick({
            dots: true,
            rows: 2,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    rows: 2,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    rows: 1,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

    });


})


const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};

const removeClasses = (elemSet, className) => {
    elemSet.forEach(elem => {
        elem.classList.remove(className);
    });
};

const findParent = (elem, parentClass) => {
    let currentNode = elem;
    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }
    return currentNode;
};

const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

const setActiveStep = activeStepNum => {
    removeClasses(DOMstrings.stepsBtns, 'js-active');
    DOMstrings.stepsBtns.forEach((elem, index) => {
        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

const getActivePanel = () => {
    let activePanel;
    DOMstrings.stepFormPanels.forEach(elem => {
        if (elem.classList.contains('js-active')) {
            activePanel = elem;
        }
    });
    return activePanel;
};

const setActivePanel = activePanelNum => {
    const animation = $(DOMstrings.stepFormPanels, 'js-active').attr("data-animation");

    removeClasses(DOMstrings.stepFormPanels, 'js-active');
    removeClasses(DOMstrings.stepFormPanels, animation);
    removeClasses(DOMstrings.stepFormPanels, 'animate__animated');

    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {
            elem.classList.add('js-active');
            elem.classList.add('animate__animated', animation);

            setTimeout(function() {
                removeClasses(DOMstrings.stepFormPanels, 'animate__animated', animation);
            }, 1200);

            setFormHeight(elem);
        }
    });
};

const formHeight = activePanel => {
    const activePanelHeight = activePanel.offsetHeight;
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
    const activePanel = getActivePanel();
    formHeight(activePanel);
};

DOMstrings.stepsBar.addEventListener('click', e => {
    const eventTarget = e.target;
    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }
    const activeStep = getActiveStep(eventTarget);
    setActiveStep(activeStep);
    setActivePanel(activeStep);
});

DOMstrings.stepsForm.addEventListener('click', e => {
    const eventTarget = e.target;
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
    }
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;
    } else {
        activePanelNum++;
    }
    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
});
