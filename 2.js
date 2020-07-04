const dataKey = ['out','stand','king','and'];
const word = 'outstanding';

const check = ( dataKey, word ) => {
	for(let i= 0; i< dataKey.length ; i ++){
		let result = word.search(dataKey[i]) >= 0 ? true : false;
		console.log (dataKey[i] + " => " + result);
	}

}