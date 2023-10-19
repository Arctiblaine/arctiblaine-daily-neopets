<!-- Programmer - Archie R -->
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Neopets Daily Helper</title>
<style>
/** HTML Styles **/
div {
      margin-left: 5%;
}

/** Custom Rules **/

</style>
</head>
<body>
<h1>Arctiblaine's Neopets Daily Helper</h1>
<div>
    <h1>Lunar Temple</h1>
    <div>
        Enter Kreludor Angle: <input id="angleInput" type="number" value="0"><br>
        <img src="https://neopets-cheats.com/wp-content/uploads/2016/01/vyrLTvb-4831942.png">
        <p id="angleOutput"></p>
        <p><button onclick="kreludorAngle()">Solve!</button></p>
        <br><br>
    </div>
    
    <h1>Daily Puzzle</h1>
    <div>
    	<h2><a href="https://www.jellyneo.net/?go=dailypuzzle">Daily Puzzle Solution</a></h2>
    	<br><br>
    </div>
    
    <h1>Mysterious Negg Cave Solver</h1>
    <div>
    	<h2><a href="https://thedailyneopets.com/articles/negg-solver">Mysterious Negg Cave Puzzle Solver</a></h2>
        <p><textarea rows="7" cols="50" id="PageSourceBox">
        Paste the page source here...
        </textarea></p>
        <p><button onclick="SolveButtonClicked()">Solve!</button></p>
        <p id="output"></p>
    	<p>If the solution shown above does <strong>not</strong> solve the puzzle, then the clues you have for today have more than one possible answer. This solver can only show ONE of these answers, sorry! Additionally be sure to not change the code as you paste it in or you will be given an incorrect answer.</p>
    	<br><br>
    </div>
    
    <h1>Food Club</h1>
    <div>
    	<h2><a href="https://www.reddit.com/r/neopets/">r/neopets front page</a></h2>
    </div>
    
    <h1>Lottery</h1>
    <div>
    	<p id="lotto"></p>
        <button onclick="lottoNos()">Click me for today's lotto numbers!</button>
    	<br><br>
    </div>
    
    <h1>Today's Marrow Guess</h1>
    <div>
    	<p id="marrow"></p>
    	<button onclick="marrowGuess()">Click me for today's Marrow guess!</button>
    	<br><br>
    </div>
</div>

<script>
var guessP = document.getElementById("marrow");
var lottoTickets = document.getElementById("lotto");
var output = document.getElementById("output");
var angleOutput = document.getElementById("angleOutput");

function lottoNos() {
	let delim = ", "
	let str = "";
	for (let i=0; i < 20; i++) {
		num1 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		num2 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		num3 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		num4 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		num5 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		num6 = (Math.floor(Math.random() * ((30 - 1) + 1) + 1)).toString();
		lotto = [num1, num2, num3, num4, num5, num6];

		str += lotto.toString() + "<br>";
	}
	lottoTickets.innerHTML = str;
}

function marrowGuess() {
	let guess = Math.floor(Math.random() * ((800 - 200) + 1) + 200);
	guessP.innerHTML = guess;
}

function kreludorAngle() {
	var angle = parseInt(document.getElementById("angleInput").value);
	if (angle >= 0 && angle <= 11) {
		angleOutput.innerHTML = 1;
	} else if (angle >= 12 && angle <= 33) {
		angleOutput.innerHTML = 2;
	} else if (angle >= 34 && angle <= 56) {
		angleOutput.innerHTML = 3;
	} else if (angle >= 57 && angle <= 78) {
		angleOutput.innerHTML = 4;
	} else if (angle >= 79 && angle <= 101) {
		angleOutput.innerHTML = 5;
	} else if (angle >= 102 && angle <= 123) {
		angleOutput.innerHTML = 6;
	} else if (angle >= 124 && angle <= 146) {
		angleOutput.innerHTML = 7;
	} else if (angle >= 147 && angle <= 168) {
		angleOutput.innerHTML = 8;
	} else if (angle >= 169 && angle <= 191) {
		angleOutput.innerHTML = 9;
	} else if (angle >= 192 && angle <= 213) {
		angleOutput.innerHTML = 10;
	} else if (angle >= 214 && angle <= 236) {
		angleOutput.innerHTML = 11;
	} else if (angle >= 237 && angle <= 258) {
		angleOutput.innerHTML = 12;
	} else if (angle >= 259 && angle <= 281) {
		angleOutput.innerHTML = 13;
	} else if (angle >= 282 && angle <= 303) {
		angleOutput.innerHTML = 14;
	} else if (angle >= 304 && angle <= 326) {
		angleOutput.innerHTML = 15;
	} else if (angle >= 327 && angle <= 348) {
		angleOutput.innerHTML = 16;
	} else {
		angleOutput.innerHTML = 1;
	}
}

function SolveButtonClicked() {
    if(window.addEventListener){window.addEventListener('load',WindowLoad,false);}else if(window.attachEvent){window.attachEvent('onload',WindowLoad);}
    function WindowLoad(event){FillSolutionTable([9,9,9,9,9,9,9,9,9]);}
    function getArr(nRows,nCols,init){var clueItems=[];for(var j=0;j<nRows;++j){var row=[];for(var k=0;k<nCols;++k){row.push(init);}
    clueItems.push(row);}
    return clueItems;}
    function clueFits(guess,clue){for(var x=0;x<=3-clue.length;++x){for(var y=0;y<=3-clue[0].length;++y){var works=true;for(var dx=0;dx<clue.length;++dx){for(var dy=0;dy<clue[0].length;++dy){var guessSqr=guess[x+dx][y+dy];var clueSqr=clue[dx][dy];if(!((clueSqr[0]==3||guessSqr%3==clueSqr[0])&&(clueSqr[1]==3||(Math.floor(guessSqr/3)==clueSqr[1])))){works=false;dx=3;break;}}}
    if(works){return true;}}}
    return false;}
    function FillSolutionTable(solution){var out="<table>";for(var r=0;r<3;++r){out+="<tr>";for(var c=0;c<3;++c){var iconNumber=solution[3*r+c];out+="<td><img src=\"http://thedailyneopets.com/uploads/articles/dailies/neggsolver/"+iconNumber+".png\"></td>";}
    out+="</tr>";}
    out+="</table>";document.getElementById("output").innerHTML=out;}
    function SolveButtonClicked(){var source=document.getElementById('PageSourceBox').value;var solution=SolvePuzzle(source);FillSolutionTable(solution);}
    function SolvePuzzle(source){source=source.split("<table class=\"mnc_clue_table\">")
    var clueSquares=[["mnc_negg_clue_s0c0",[0,0]],["mnc_negg_clue_s0c1",[0,1]],["mnc_negg_clue_s0c2",[0,2]],["mnc_negg_clue_s0cX",[0,3]],["mnc_negg_clue_s1c0",[1,0]],["mnc_negg_clue_s1c1",[1,1]],["mnc_negg_clue_s1c2",[1,2]],["mnc_negg_clue_s1cX",[1,3]],["mnc_negg_clue_s2c0",[2,0]],["mnc_negg_clue_s2c1",[2,1]],["mnc_negg_clue_s2c2",[2,2]],["mnc_negg_clue_s2cX",[2,3]],["mnc_negg_clue_sXc0",[3,0]],["mnc_negg_clue_sXc1",[3,1]],["mnc_negg_clue_sXc2",[3,2]],["mnc_negg_clue_sXcX",[3,3]],["<td class=\"empty\"></td>",[3,3]],];var out="";var clues=[];for(var i=1;i<source.length;++i){var table=source[i].substring(0,source[i].indexOf("</table>"));var nItems=table.split("<td").length-1;var nRows=table.split("<tr>").length-1;var nCols=nItems/nRows;var clueItems=getArr(nRows,nCols,-1);var m=0;for(var k=0;k<table.length;++k){for(var j=0;j<clueSquares.length;++j){var clueStr=clueSquares[j][0];var clueDesc=clueSquares[j][1];if(table.substring(k,k+clueStr.length)==clueStr){clueItems[Math.floor(m/nCols)][m%nCols]=clueDesc;m++;break;}}}
    clues.push(clueItems);}
    var permCount=1;var N=9;for(var i=1;i<=N;++i){permCount*=i;}
    for(var perm0=0;perm0<permCount;++perm0){var perm=perm0;var curPerm=permCount;var guess=[];for(var i=0;i<N;++i){guess.push(-1);}
    for(var i=N;i>=1;--i){curPerm/=i;var place=Math.floor(perm/curPerm);var m=0;for(var j=0;j<N;++j){if(guess[j]==-1){if(m==place){guess[j]=i-1;}
    m++;}}
    perm%=curPerm;}
    var guess1=getArr(3,3,-1);for(var i=0;i<N;++i){guess1[Math.floor(i/3)][i%3]=guess[i];}
    var isSolution=true;for(var i=0;i<clues.length;++i){if(!clueFits(guess1,clues[i])){isSolution=false;break;}}
    if(isSolution){output.innerHTML = guess;}}
    return[9,9,9,9,9,9,9,9,9];}


}
</script>
</body>
</html>
