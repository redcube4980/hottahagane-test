/* mapSelect
 -------------------------------------------------------- */
var mapSelect={
	over:function(visitor){
		var 	map=document.getElementById('mapFacilitiesImage');

		map.src=map.src.replace(/_facilities\./,'_facilities_'+visitor+'.');
	},

	out:function(visitor){
		var 	map=document.getElementById('mapFacilitiesImage');

		map.src=map.src.replace('_facilities_'+visitor+'.','_facilities.');
	}
}