function ajax(cfg){
	var xh=false;
	if (window.XMLHttpRequest) {
        xh = new XMLHttpRequest();
    }else if(window.ActiveXObject) {
        xh = new ActiveXObject("Microsoft.XMLHTTP");
    }
	if(cfg.tipo===undefined)
		cfg.tipo='get';
	cfg.tipo=cfg.tipo.toUpperCase();
	xh.open(cfg.tipo, cfg.url, true);
	var parametros='';
	if(cfg.datos!==undefined){
		for(var cl in cfg.datos) parametros+=cl+'='+cfg.datos[cl]+'&';
	}
	if(cfg.tipo=="POST")
		xh.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xh.onreadystatechange=function(){
		if(xh.readyState==1){
			if(cfg.proceso!==undefined) cfg.proceso();
		}else if(xh.readyState==4){
			if(xh.status==200){
				if(cfg.exito!==undefined){
					if(cfg.tipodato!==undefined && cfg.tipodato.toUpperCase()=='JSON'){
						eval('var json='+xh.responseText);
						cfg.exito(json);
					}else{
						cfg.exito(xh.responseText);
					}
				}
			}else{
				if(cfg.error!==undefined)
					cfg.error(xh.status);
			}
			if(cfg.despues!==undefined)	cfg.despues();
		}
	}
	if(cfg.antes!==undefined) cfg.antes();
	if(parametros!=='')
		xh.send(parametros);
	else
		xh.send(null);
}

function _(sel){
	if(sel[0]!==undefined && sel[0]=='#')
		return document.getElementById(sel.substr(1));
	return document.getElementsByTagName(sel);
}

window.onload=function(){
	_('#titulo').onclick=function(){
		ajax({
			tipo:'post',
			url:'index.php?c=main&a=index',
			tipodato:'json',
			datos:{
				prueba:'jonathan'
			},
			exito:function(t){
				_('#contenedor').innerHTML+=t.msg;
				_('#contenedor').innerHTML+=t.msg;
			},
			error:function(e){
				alert('error: '+e);
			}
		});
	}
	
	var ifr=document.createElement('iframe');
	ifr.style.display='none';
	ifr.src='index.php?c=main&a=prueba';
	ifr.onload=function(){
		alert('cargado');
		_('#contenedor').removeChild(ifr);
	}
	document.body.appendChild(ifr);
	_('#subir').onclick=function(){
		alert(ifr.clientWidth);
		alert(ifr.clientHeight);
	}
	
	//document.body.appendChild(ifr);
}