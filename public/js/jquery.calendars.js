!function(a){function t(){this.regionalOptions=[],this.regionalOptions[""]={invalidCalendar:"Calendar {0} not found",invalidDate:"Invalid {0} date",invalidMonth:"Invalid {0} month",invalidYear:"Invalid {0} year",differentCalendars:"Cannot mix {0} and {1} dates"},this.local=this.regionalOptions[""],this.calendars={},this._localCals={}}function n(t,n,e,i){if(this._calendar=t,this._year=n,this._month=e,this._day=i,0===this._calendar._validateLevel&&!this._calendar.isValid(this._year,this._month,this._day))throw(a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate).replace(/\{0\}/,this._calendar.local.name)}function e(a,t){return a=""+a,"000000".substring(0,t-a.length)+a}function i(){this.shortYearCutoff="+10"}function r(a){this.local=this.regionalOptions[a]||this.regionalOptions[""]}a.extend(t.prototype,{instance:function(a,t){a=(a||"gregorian").toLowerCase(),t=t||"";var n=this._localCals[a+"-"+t];if(!n&&this.calendars[a]&&(n=new this.calendars[a](t),this._localCals[a+"-"+t]=n),!n)throw(this.local.invalidCalendar||this.regionalOptions[""].invalidCalendar).replace(/\{0\}/,a);return n},newDate:function(a,t,n,e,i){return e=(null!=a&&a.year?a.calendar():"string"==typeof e?this.instance(e,i):e)||this.instance(),e.newDate(a,t,n)}}),a.extend(n.prototype,{newDate:function(a,t,n){return this._calendar.newDate(null==a?this:a,t,n)},year:function(a){return 0===arguments.length?this._year:this.set(a,"y")},month:function(a){return 0===arguments.length?this._month:this.set(a,"m")},day:function(a){return 0===arguments.length?this._day:this.set(a,"d")},date:function(t,n,e){if(!this._calendar.isValid(t,n,e))throw(a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate).replace(/\{0\}/,this._calendar.local.name);return this._year=t,this._month=n,this._day=e,this},leapYear:function(){return this._calendar.leapYear(this)},epoch:function(){return this._calendar.epoch(this)},formatYear:function(){return this._calendar.formatYear(this)},monthOfYear:function(){return this._calendar.monthOfYear(this)},weekOfYear:function(){return this._calendar.weekOfYear(this)},daysInYear:function(){return this._calendar.daysInYear(this)},dayOfYear:function(){return this._calendar.dayOfYear(this)},daysInMonth:function(){return this._calendar.daysInMonth(this)},dayOfWeek:function(){return this._calendar.dayOfWeek(this)},weekDay:function(){return this._calendar.weekDay(this)},extraInfo:function(){return this._calendar.extraInfo(this)},add:function(a,t){return this._calendar.add(this,a,t)},set:function(a,t){return this._calendar.set(this,a,t)},compareTo:function(t){if(this._calendar.name!==t._calendar.name)throw(a.calendars.local.differentCalendars||a.calendars.regionalOptions[""].differentCalendars).replace(/\{0\}/,this._calendar.local.name).replace(/\{1\}/,t._calendar.local.name);var n=this._year!==t._year?this._year-t._year:this._month!==t._month?this.monthOfYear()-t.monthOfYear():this._day-t._day;return 0===n?0:0>n?-1:1},calendar:function(){return this._calendar},toJD:function(){return this._calendar.toJD(this)},fromJD:function(a){return this._calendar.fromJD(a)},toJSDate:function(){return this._calendar.toJSDate(this)},fromJSDate:function(a){return this._calendar.fromJSDate(a)},toString:function(){return(this.year()<0?"-":"")+e(Math.abs(this.year()),4)+"-"+e(this.month(),2)+"-"+e(this.day(),2)}}),a.extend(i.prototype,{_validateLevel:0,newDate:function(t,e,i){return null==t?this.today():(t.year&&(this._validate(t,e,i,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate),i=t.day(),e=t.month(),t=t.year()),new n(this,t,e,i))},today:function(){return this.fromJSDate(new Date)},epoch:function(t){var n=this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidYear||a.calendars.regionalOptions[""].invalidYear);return n.year()<0?this.local.epochs[0]:this.local.epochs[1]},formatYear:function(t){var n=this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidYear||a.calendars.regionalOptions[""].invalidYear);return(n.year()<0?"-":"")+e(Math.abs(n.year()),4)},monthsInYear:function(t){return this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidYear||a.calendars.regionalOptions[""].invalidYear),12},monthOfYear:function(t,n){var e=this._validate(t,n,this.minDay,a.calendars.local.invalidMonth||a.calendars.regionalOptions[""].invalidMonth);return(e.month()+this.monthsInYear(e)-this.firstMonth)%this.monthsInYear(e)+this.minMonth},fromMonthOfYear:function(t,n){var e=(n+this.firstMonth-2*this.minMonth)%this.monthsInYear(t)+this.minMonth;return this._validate(t,e,this.minDay,a.calendars.local.invalidMonth||a.calendars.regionalOptions[""].invalidMonth),e},daysInYear:function(t){var n=this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidYear||a.calendars.regionalOptions[""].invalidYear);return this.leapYear(n)?366:365},dayOfYear:function(t,n,e){var i=this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate);return i.toJD()-this.newDate(i.year(),this.fromMonthOfYear(i.year(),this.minMonth),this.minDay).toJD()+1},daysInWeek:function(){return 7},dayOfWeek:function(t,n,e){var i=this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate);return(Math.floor(this.toJD(i))+2)%this.daysInWeek()},extraInfo:function(t,n,e){return this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate),{}},add:function(t,n,e){return this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate),this._correctAdd(t,this._add(t,n,e),n,e)},_add:function(a,t,n){if(this._validateLevel++,"d"===n||"w"===n){var e=a.toJD()+t*("w"===n?this.daysInWeek():1),i=a.calendar().fromJD(e);return this._validateLevel--,[i.year(),i.month(),i.day()]}try{var r=a.year()+("y"===n?t:0),s=a.monthOfYear()+("m"===n?t:0),i=a.day(),o=function(a){for(;s<a.minMonth;)r--,s+=a.monthsInYear(r);for(var t=a.monthsInYear(r);s>t-1+a.minMonth;)r++,s-=t,t=a.monthsInYear(r)};"y"===n?(a.month()!==this.fromMonthOfYear(r,s)&&(s=this.newDate(r,a.month(),this.minDay).monthOfYear()),s=Math.min(s,this.monthsInYear(r)),i=Math.min(i,this.daysInMonth(r,this.fromMonthOfYear(r,s)))):"m"===n&&(o(this),i=Math.min(i,this.daysInMonth(r,this.fromMonthOfYear(r,s))));var l=[r,this.fromMonthOfYear(r,s),i];return this._validateLevel--,l}catch(h){throw this._validateLevel--,h}},_correctAdd:function(a,t,n,e){if(!(this.hasYearZero||"y"!==e&&"m"!==e||0!==t[0]&&a.year()>0==t[0]>0)){var i={y:[1,1,"y"],m:[1,this.monthsInYear(-1),"m"],w:[this.daysInWeek(),this.daysInYear(-1),"d"],d:[1,this.daysInYear(-1),"d"]}[e],r=0>n?-1:1;t=this._add(a,n*i[0]+r*i[1],i[2])}return a.date(t[0],t[1],t[2])},set:function(t,n,e){this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate);var i="y"===e?n:t.year(),r="m"===e?n:t.month(),s="d"===e?n:t.day();return("y"===e||"m"===e)&&(s=Math.min(s,this.daysInMonth(i,r))),t.date(i,r,s)},isValid:function(a,t,n){this._validateLevel++;var e=this.hasYearZero||0!==a;if(e){var i=this.newDate(a,t,this.minDay);e=t>=this.minMonth&&t-this.minMonth<this.monthsInYear(i)&&n>=this.minDay&&n-this.minDay<this.daysInMonth(i)}return this._validateLevel--,e},toJSDate:function(t,n,e){var i=this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate);return a.calendars.instance().fromJD(this.toJD(i)).toJSDate()},fromJSDate:function(t){return this.fromJD(a.calendars.instance().fromJSDate(t).toJD())},_validate:function(t,n,e,i){if(t.year){if(0===this._validateLevel&&this.name!==t.calendar().name)throw(a.calendars.local.differentCalendars||a.calendars.regionalOptions[""].differentCalendars).replace(/\{0\}/,this.local.name).replace(/\{1\}/,t.calendar().local.name);return t}try{if(this._validateLevel++,1===this._validateLevel&&!this.isValid(t,n,e))throw i.replace(/\{0\}/,this.local.name);var r=this.newDate(t,n,e);return this._validateLevel--,r}catch(s){throw this._validateLevel--,s}}}),r.prototype=new i,a.extend(r.prototype,{name:"Gregorian",jdEpoch:1721425.5,daysPerMonth:[31,28,31,30,31,30,31,31,30,31,30,31],hasYearZero:!1,minMonth:1,firstMonth:1,minDay:1,regionalOptions:{"":{name:"Gregorian",epochs:["BCE","CE"],monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],dateFormat:"mm/dd/yyyy",firstDay:0,isRTL:!1}},leapYear:function(t){var n=this._validate(t,this.minMonth,this.minDay,a.calendars.local.invalidYear||a.calendars.regionalOptions[""].invalidYear),t=n.year()+(n.year()<0?1:0);return t%4===0&&(t%100!==0||t%400===0)},weekOfYear:function(a,t,n){var e=this.newDate(a,t,n);return e.add(4-(e.dayOfWeek()||7),"d"),Math.floor((e.dayOfYear()-1)/7)+1},daysInMonth:function(t,n){var e=this._validate(t,n,this.minDay,a.calendars.local.invalidMonth||a.calendars.regionalOptions[""].invalidMonth);return this.daysPerMonth[e.month()-1]+(2===e.month()&&this.leapYear(e.year())?1:0)},weekDay:function(a,t,n){return(this.dayOfWeek(a,t,n)||7)<6},toJD:function(t,n,e){var i=this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate);t=i.year(),n=i.month(),e=i.day(),0>t&&t++,3>n&&(n+=12,t--);var r=Math.floor(t/100),s=2-r+Math.floor(r/4);return Math.floor(365.25*(t+4716))+Math.floor(30.6001*(n+1))+e+s-1524.5},fromJD:function(a){var t=Math.floor(a+.5),n=Math.floor((t-1867216.25)/36524.25);n=t+1+n-Math.floor(n/4);var e=n+1524,i=Math.floor((e-122.1)/365.25),r=Math.floor(365.25*i),s=Math.floor((e-r)/30.6001),o=e-r-Math.floor(30.6001*s),l=s-(s>13.5?13:1),h=i-(l>2.5?4716:4715);return 0>=h&&h--,this.newDate(h,l,o)},toJSDate:function(t,n,e){var i=this._validate(t,n,e,a.calendars.local.invalidDate||a.calendars.regionalOptions[""].invalidDate),r=new Date(i.year(),i.month()-1,i.day());return r.setHours(0),r.setMinutes(0),r.setSeconds(0),r.setMilliseconds(0),r.setHours(r.getHours()>12?r.getHours()+2:0),r},fromJSDate:function(a){return this.newDate(a.getFullYear(),a.getMonth()+1,a.getDate())}}),a.calendars=new t,a.calendars.cdate=n,a.calendars.baseCalendar=i,a.calendars.calendars.gregorian=r}(jQuery);