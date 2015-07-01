var pin_config = {
	'default':{
		'pinShadow':'#000', //shadow color below the points
		'pinShadowOpacity':'50', //shadow opacity, value, 0-100
	},
	'points':[
	{
		'shape':'circle',//choose the shape of the pin circle or rectangle
		'hover': '<h3>London</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':279,//location of the pin on X axis
		'pos_Y':415,//location of the pin on Y axis
		'diameter':8,
		'outline':'transparent',//outline color of the pin
		'thickness':1,//thickness of the line (0 to hide the line)
		'upColor':'#ff9900',//color of the pin when map loads
		'overColor':'#2d358e',//color of the pin when mouse hover
		'downColor':'#00ffff',//color of the pin when clicked 
		//(trick, if you make this pin un-clickable > make the overColor and downColor the same)
		'url':'http://www.html5interactivemaps.com',//URL of this pin
		'target':'new_window',//'new_window' opens URL in new window//'same_window' opens URL in the same window //'none' pin is not clickable
		'enable':true,//true/false to enable/disable this pin
	},
	{
		'shape':'circle',
		'hover': '<h3>Birmingham</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':225,
		'pos_Y':362,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Manchester</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':209,
		'pos_Y':300,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Liverpool</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':187,
		'pos_Y':304,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#ff9900',
		'url':'http://www.html5interactivemaps.com',
		'target':'none',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Leeds</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':237,
		'pos_Y':282,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Sheffield</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':237,
		'pos_Y':304,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Bristol</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':196,
		'pos_Y':412,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Stoke-on-Trent</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':211,
		'pos_Y':331,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Leicester</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':248,
		'pos_Y':348,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Edinburgh</h3><br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':185,
		'pos_Y':158,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': '<h3>Belfast</h3>s<br>Walton Community Centre<br>May Terrace,<br>Glasgow<br>G46 6LD<br>Freephone helpline<br>0808 808 4567<br>Reception 0208 202 2211',//the content of the hover popup
		'pos_X':85,
		'pos_Y':228,
		'diameter':8,
		'outline':'transparent',
		'thickness':1,
		'upColor':'#ff9900',
		'overColor':'#2d358e',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'same_window',
		'enable':true,
	},
	]
}
