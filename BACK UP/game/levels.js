var Levels = [{'level1': 'Question with easy difficulty.'}, 'level2', 'level3'];


var CurrentLevel = Levels.find(function(level) {
    return level[0];
}) 
console.log(CurrentLevel);

if(Levels[0]) {
    console.log('Question with easy difficulty.');
}
else if(Levels[1]) {
    console.log('Question with medium difficulty.')
}
else if(Levels[2]) {
    console.log('Question with hard difficulty.');
}
