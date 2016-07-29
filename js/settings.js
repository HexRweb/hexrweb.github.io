$("#demo").click(function(e){
	e.preventDefault();
	let prefix="#block-",el=prefix + "{{ID}}-link", newLinks = [];
	for(let i = 1; i <= 8 ; i++)
	{
		let valid = $(el.replace(/{{ID}}/g,i))[0].checkValidity() && $(el.replace(/{{ID}}/g,i)).val() != "";
		if(valid)
			newLinks.push($(el.replace(/{{ID}}/g,i)).val());
		else
		{
			$(el.replace(/{{ID}}/g,i)).addClass("invalid");
			Materialize.toast("There was an error",5000);
			return false;
		}

	}
	for(let i =  ; i <= 7 ; i++)
	{
		pv.updateOption((prefix+i+1).replace(/#/g,""),newLinks[i],function(){$(prefix+i+1).attr("data-location",newLinks[i])});
	}
	Materialize.toast("Settings saved!",5000);
});
