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
	for(let i = 1; i <= 8 ; i++)
	{
		pv.updateOption((prefix+i).replace(/#/g,""),newLinks[i],function(){$(prefix+i).attr("data-location",newLinks[i])});
	}
	Materialize.toast("Settings saved!",5000);
});