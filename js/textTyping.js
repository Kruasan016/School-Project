var text = "Co naprawiamy?";
var delay = 150; 
var elem = document.getElementById("result");

var print_text = function(text, elem, delay) {
    if (text.length > 0) {
        elem.innerHTML += text[0];
        setTimeout(function() {
            print_text(text.slice(1), elem, delay);
        }, delay);
    }
};

var observer = new IntersectionObserver(function(entries) {
    if (entries[0].isIntersecting) {
        print_text(text, elem, delay);
        observer.disconnect();
    }
}, { threshold: 1.0 });

observer.observe(elem);