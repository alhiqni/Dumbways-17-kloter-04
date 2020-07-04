
function generate(name) {
	const uniqueCode = [97,122];  
	const uniqueNum =[48,57];
	const unique = [];
	const randSelector = [];
	for(let i=uniqueNum[0]; i<= uniqueNum[1]; i++){
      randSelector.push(i);
	}
	for(let i=uniqueCode[0]; i<= uniqueCode[1]; i++){
	    randSelector.push(i);
	}

	for(let i = 0; i< 8; i++){
	    unique.push(String.fromCharCode(randSelector[Math.floor(Math.random()*randSelector.length)]))
	}
	const uni1= []; 
	for(let i = 0; i<=3; i++){
		uni1.push(unique[i]) 
	}
	const uni2 = [];
	for (let i = 4; i<=7; i++){
		uni2.push(unique[i])
	}

	return console.log( name + " = "+ (uni1.join("") + "-"+ uni2.join("")) )
}
