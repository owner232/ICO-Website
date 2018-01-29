Handlebars.registerHelper('ifEqual', function(one, two, options) {
	if(one != two) {
		return options.inverse(this);
	}
	return options.fn(this);
});
Handlebars.registerHelper('ifNotEqual', function() {
	for(var i = 0; i < arguments.length - 2; i++) {
		if(arguments[i] == arguments[arguments.length - 2]) {
			return arguments[arguments.length - 1].inverse(this);
		}
	}
	return arguments[arguments.length - 1].fn(this);
});
Handlebars.registerHelper('module', function(name, data, template, options) {
	var _data = {};
	if(arguments.length > 3) {
		for(var i = 0; i < arguments.length - 3; i = i + 2) {
			_data[arguments[i]] = arguments[i + 1];
		}
	} else {
		_data = arguments[0];
	}
	return Handlebars.templates[arguments[arguments.length - 2]](_data);
});
Handlebars.registerHelper('sum', function() {
	var result = 0;
	for(var i = 0; i < arguments.length - 1; i++) {
		result = result + 1 * arguments[i];
	}
	return result;
});
Handlebars.registerHelper('caseIf', function() {
	for(var i = 0; i < arguments.length - 1; i++) {
		if(!arguments[i]) {
			return arguments[arguments.length - 1].inverse(this);
		}
	}
	return arguments[arguments.length - 1].fn(this);
});
Handlebars.registerHelper('caseUnless', function() {
	for(var i = 0; i < arguments.length - 1; i++) {
		if(arguments[i]) {
			return arguments[arguments.length - 1].inverse(this);
		}
	}
	return arguments[arguments.length - 1].fn(this);
});
Handlebars.registerHelper('caseIfOr', function() {
	for(var i = 0; i < arguments.length - 1; i++) {
		if(arguments[i]) {
			return arguments[arguments.length - 1].fn(this);
		}
	}
	return arguments[arguments.length - 1].inverse(this);
});
Handlebars.registerHelper('ifLarger', function(one, two, options) {
	if(parseInt(one) <= parseInt(two)) {
		return options.inverse(this);
	}
	return options.fn(this);
});
Handlebars.registerHelper('ifLargerOrEqual', function(one, two, options) {
	if(one != null && two != null && parseInt(one) < parseInt(two)) {
		return options.inverse(this);
	}
	return options.fn(this);
});

Handlebars.registerHelper('i18n', function(category, key, options) {
	return _t(category, key);
});
Handlebars.registerHelper('localiser', function(key, options) {
	return localiser.get(key);
});
Handlebars.registerHelper('loader', function(key, options) {
	return app.loader;
});
Handlebars.registerHelper('moment', function(date, newFormat, options) {
	return moment(date, "YYYY-MM-DD HH:mm:ss").format(newFormat);
});
Handlebars.registerHelper('stringify', function(object, options) {
	return JSON.stringify(object);
});

Handlebars.registerHelper('offset', function(limit, page, options) {
	return (page - 1) * limit;
});
Handlebars.registerHelper('replace', function(string, str, options) {
	return string.replace(new RegExp(str), '');
});
Handlebars.registerHelper('rankKey', function(rankKey) {
	return ranks[rankKey];
});
Handlebars.registerHelper('for', function(start, end, options) {
	var result = '';
	if(start < end) {
		for(var i = start; i <= end; i++) {
			result += options.fn({
				i: i
			});
		}
	} else {
		for(var i = start; i <= end; i--) {
			result += options.fn({
				i: i
			});
		}
	}
	return result;
});


Handlebars.registerHelper('_tournament_duration', function(leftDate, rightDate) {
	var diff = Math.abs(moment(leftDate, "YYYY-MM-DD HH:mm:ss").format('X') - moment(rightDate, "YYYY-MM-DD HH:mm:ss").format('X'));
	var hours = Math.floor(diff / 3600);
	if(hours < 10) {
		hours = '0' + hours;
	}
	diff = diff % 3600;
	var minutes = Math.floor(diff / 60);
	if(minutes < 10) {
		minutes = '0' + minutes;
	}
	diff = diff % 60;
	var seconds = diff;
	if(seconds < 10) {
		seconds = '0' + seconds;
	}
	return hours + ':' + minutes + ':' + seconds;
});

Handlebars.registerHelper('getName',function(name,context){
	return context[name];
});




Handlebars.registerHelper('ifCond', function(v1, v3, v2, options) {

    var status = false;
    if (v3 === '==') {
        if (v1 == v2) {
            status = true;
        }
    }

    if (v3 === '===') {
        if (v1 === v2) {
            status = true;
        }
    }

    if (v3 === '!=') {
        if (v1 != v2) {
            status = true;
        }
    }
    if (v3 === '!==') {
        if (v1 !== v2) {
            status = true;
        }
    }

    if (v3 === '>') {
        if (v1 > v2) {
            status = true;
        }
    }
    if (v3 === '<') {
        if (v1 < v2) {
            status = true;
        }
    }
    if (v3 === '<=') {
        if (v1 <= v2) {
            status = true;
        }
    }
    if (v3 === '>=') {
        if (v1 >= v2) {
            status = true;
        }
    }
    if(status) {
        return options.fn(this);
    }
    return options.inverse(this);
});

Handlebars.registerHelper('getBaseURL',function(){
	return $('#iframe_url').val();
	// return location.protocol + "//" + location.hostname +
	// 	(location.port && ":" + location.port) + "/";
});