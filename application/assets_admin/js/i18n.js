var i18n = {
	Dictionary: {},

	get: function(category, key) {
		if(typeof i18n.Dictionary[category] != 'undefined' && typeof i18n.Dictionary[category][key] != 'undefined') {
			return i18n.Dictionary[category][key];
		}
		return key;
	}
};
var _t = i18n.get;