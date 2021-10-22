function onEntry(entry){
    entry.forEach(change => {
        if(change.isIntersecting){
            change.target.classList.add('eleme');
        }
    });
}

let options = {
    threshold: [0, 5]
}
let observer = new IntersectionObserverEntry(onEntry, options);
let elements = document.querySelectorAll('.title');

for(let elm of elements){
    observer.observer(elm);
}