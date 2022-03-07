function ready() {
    hideAll();
    showFirst()
    
    let groupLinks = document.querySelectorAll('.groupLink');
    for (let i = 0; i < groupLinks.length; i++) {
        groupLinks[i].onclick = function(){
            hideAll()

            let groupName = groupLinks[i].dataset.groupname
            let groupId = document.querySelector('#' + groupName + 'byId') ;
            
            groupId.classList.remove('hide');
            groupId.classList.add('show');
        };
    }
}

function hideAll() {
    let groupsBlock = document.querySelectorAll('.group');
    for (let i = 0; i < groupsBlock.length; i++) {
        groupsBlock[i].classList.add('hide');
        groupsBlock[i].classList.remove('show');
    }
}

function showFirst() {
    let groupsBlock = document.querySelectorAll('.group');
    groupsBlock[0].classList.add('show');
}

document.addEventListener("DOMContentLoaded", ready);