function addToLog(botname,weapon) {
    var all = document.getElementsByClassName('logelem')
    console.log(all.length)
    if (all.length < 8) {
        var element = '<div id="logelement" class="logelem"><img src="pics/'+botname+'.jpg" id="logpic"><div class="logtext"><span id="botname">'+botname+'</span><span id="put"> put </span><span id="weapon">'+weapon+'</span></div></div>'
        document.getElementById('log').innerHTML = element + document.getElementById('log').innerHTML
        var winnerpic = '<img id="winnerpic" src="pics/'+botname+'.jpg">'
        document.getElementById('winner').innerHTML = winnerpic + document.getElementById('winner').innerHTML
    }
};
function cut() {
    var all = document.getElementsByClassName('logelem')
    if (all.length > 12 ) {
        var list = document.getElementById('log');
        list.removeChild(list.childNodes[11]);
    }
}