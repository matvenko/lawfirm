

   	// livechat by www.mylivechat.com/  2018-06-12

   	

   	if(typeof(MyLiveChat)=="undefined")
   	{
   		MyLiveChat={};
   		MyLiveChat.RawConfig={OperatingHoursSchedule:"0",InPageHeadBorderColor:"#f5705e",WaitingShowForClick:"1",OperatingHoursCheckDay6:"0",OperatingHoursCheckDay4:"1",OperatingHoursCheckDay5:"1",OperatingHoursCheckDay2:"1",OperatingHoursCheckDay3:"1",OperatingHoursCheckDay0:"0",OperatingHoursCheckDay1:"1",iosnotifylist:"",FeedbackLogo:"33",WaitingFieldQuestion:"1",WaitingShowForSmart:"1",WaitingFieldDepartment:"1",InPageHeadOnline:"Live Chat (Online)",InPageImageOffline:"1",CustomDataDefinition:"[]",InPageUseBubbleTop:"0",WaitingShowForInvite:"0",OperatingHoursCheckWeekend:"0",MessageTimestampVisible:"1",WebConsoleRedirectTime:"636678549418391879",InPageHeadBgColor:"#f5705e",InPageTemplate:"1",InlineChatShowLogo:"0",InlineChatmaxWaitTime:"300",maxWaitTime:"300",DialogHeight:"420",DialogChatBackgroundStyle:"",InlineChatWaitingFieldQuestion:"1",InPageBubbleTop:"1",InlineChatWaitingShowForClick:"1",OperatingHoursValDay1:"9:00-17:00",OperatingHoursValDay3:"9:00-17:00",OperatingHoursValDay2:"9:00-17:00",OperatingHoursValDay5:"9:00-17:00",OperatingHoursValDay4:"9:00-17:00",InlineChatWaitingFieldEmail:"1",InlineChatWaitingFieldDepartment:"0",DialogWidth:"580",InPageImageOnline:"1",OperatingHoursCheckWeekday:"0",WaitingFieldEmail:"1",OperatingHoursEnable:"1"};
   		MyLiveChat.RawQuery={hccid:"60683814",apimode:"chatinline"};
   		for(var mlcp in MyLiveChat.RawConfig)
   		{
   			MyLiveChat[mlcp]=MyLiveChat.RawConfig[mlcp];
   		}
   		for(var mlcp in MyLiveChat.RawQuery)
   		{
   			MyLiveChat[mlcp]=MyLiveChat.RawQuery[mlcp];
   		}
   		if(MyLiveChat.InPageTemplate=="1"||MyLiveChat.InPageTemplate=="7")
   			MyLiveChat.InlineChatTemplate="2";
   		if(!MyLiveChat.InlineChatTemplate)
   			MyLiveChat.InlineChatTemplate=MyLiveChat.InPageTemplate||"2";

   		MyLiveChat.HCCID='60683814';
   		MyLiveChat.PageBeginTime=new Date().getTime();
   		MyLiveChat.LoadingHandlers=[];
   		//	,"Departments"
   		MyLiveChat.CPRFIELDS=["SyncType","SyncStatus","SyncResult","HasReadyAgents","VisitorUrls","VisitorStatus","VisitorDuration","VisitorEntryUrl","VisitorReferUrl"];
	   }



   	MyLiveChat.Version=1019;
   	MyLiveChat.FirstRequestTimeout=28800;
   	MyLiveChat.NextRequestTimeout=57600;
   	MyLiveChat.SyncType=null;
   	MyLiveChat.SyncStatus="LOADING";
   	MyLiveChat.SyncUserName=null;
   	MyLiveChat.SyncResult="LOADING";
   	MyLiveChat.HasReadyAgents=false;
   	MyLiveChat.SourceUrl="https://lawfirm.ge/";
   	MyLiveChat.AgentTimeZone=parseInt("4" || "-5");
   	MyLiveChat.UrlBase="https://c1.mylivechat.com/livechat/";
   	MyLiveChat.SiteUrl="https://c1.mylivechat.com/";

   	MyLiveChat.Departments=[];

   	

   	MyLiveChat.Departments.push({
   		Name:"Default",
   		Agents:[{
   			Id:'User:2',
   			Name:"Archil",
   			Online:false
   			}],
   		Online:false
   		});

	

	
   	MyLiveChat.VisitorUrls=[];


	
   	
   	function MyLiveChat_AddScript(tag)
   	{
   		var func=MyLiveChat_AddScript;
   		var arr=func._list;
   		if(!arr)func._list=arr=[];
   		if(func._loading)
   		{
   			arr.push(tag);
   			return;
   		}
   		function ontagload()
   		{
   			func._loading=false;
   			if(!arr.length)return;
   			tag=arr.shift();
   			LoadTag();
   		}
   		function LoadTag()
   		{
   			func._loading=true;
   			if('onload' in tag)
   			{
   				tag.onload=ontagload;
   			}
   			else
   			{
   				var iid=setInterval(function()
   				{
   					if(tag.readyState!='complete'&&tag.readyState!='loaded')
   						return;
   					clearInterval(iid);
   					ontagload();
   				},10);
   			}
   			var p=document.getElementsByTagName("head")[0]||document.body;
   			p.insertBefore(tag,p.firstChild);
   		}
   		LoadTag();
   	}

   	function MyLiveChat_GetLastScriptTag()
   	{
   		var coll=document.getElementsByTagName("script");
   		return coll[coll.length-1];
   	}
   	function MyLiveChat_DocWrite(html,relativetag)
   	{
   		if(html.substr(0,7)=="<script")	//Low IE interactive or defer
   		{
   			var tag=document.createElement("script");

   			var src=html.match(/src=["']?([^"'>]*)["']/)[1];
   			var div=document.createElement("div");
   			div.innerHTML=src;
   			src=div.innerText||div.firstChild.nodeValue;

   			if(!MyLiveChat.LoadedScripts)MyLiveChat.LoadedScripts={};
   			if(MyLiveChat.LoadedScripts[src])return;
   			MyLiveChat.LoadedScripts[src]=true;
   			tag.setAttribute("src",src);
   			MyLiveChat_AddScript(tag);
   		}
   		else
   		{
   			if(!document.body||document.readyState=="loading")
   			{
   				document.write(html);
   				return;
   			}

   			if(!relativetag)relativetag=MyLiveChat_GetLastScriptTag();

   			var div = document.createElement("DIV");
   			div.innerHTML = html;
   			while (true) {
   				var c = div.firstChild;
   				if (!c) break;
   				div.removeChild(c);
   				relativetag.parentNode.insertBefore(c,relativetag);
   			}
   		}
   	}
	
	   MyLiveChat.RandomID = 'f84c1831-ae5c-35ce-85e0-83291297d708';


	   MyLiveChat.NewGuid = function () {
		   var guid = "";
		   for (var i = 1; i <= 32; i++) {
			   guid += Math.floor(Math.random() * 16.0).toString(16);
			   if (i == 8 || i == 12 || i == 16 || i == 20) guid += "-";
		   }
		   return guid;
	   }

	   MyLiveChat.RandomID = MyLiveChat.NewGuid().substring(0, 18) + MyLiveChat.RandomID.substring(18);


	

   	MyLiveChat.VisitorStatus="";
   	MyLiveChat.VisitorDuration=0;
   	MyLiveChat.VisitorEntryUrl="";
   	MyLiveChat.VisitorReferUrl="";

   	MyLiveChat.ShowButton=true;
   	MyLiveChat.ShowLink=true;
   	MyLiveChat.ShowBox=true;
   	MyLiveChat.ShowSmart=false;
   	MyLiveChat.ScriptUrl="https://c1.mylivechat.com/livechat/livechat.aspx?hccid=60683814\x26apimode=chatinline";

   	MyLiveChat.NoPrivateLabel=true;


   	MyLiveChat.LoadingHandlers.push(function(funcself)
   	{
   		MyLiveChat_RunLoadingHandler('chatinline',funcself);
   	});

   	MyLiveChat.ResourcesVary="\x26culture=en\x26mlcv=1019";

   	function MyLiveChat_HtmlEncode(text) {
   		if (!text) return "";
   		return text.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/\x22/g, "&quot;")
			.replace(/\x27/g, "&#39;").replace(/\n/g, "<br/>").replace(/\r/g, "");
   	}
   	function MyLiveChat_LoadMoreScripts()
   	{
   		var mlcresurl=MyLiveChat.UrlBase+"resources.aspx?HCCID="+MyLiveChat.HCCID;
   		if(MyLiveChat.InPageTemplate)mlcresurl+="&InPageTemplate="+MyLiveChat.InPageTemplate;
   		if(MyLiveChat.InlineChatTemplate)mlcresurl+="&InlineChatTemplate="+MyLiveChat.InlineChatTemplate;
	
   		if(!window.jsml)
   		{
   			MyLiveChat_DocWrite("<script src='"+MyLiveChat.SiteUrl+"JSML/jsml.js'></scr"+"ipt>");
   		}
   		MyLiveChat_DocWrite("<script src='"+MyLiveChat_HtmlEncode(mlcresurl+MyLiveChat.ResourcesVary)+"'></scr"+"ipt>");

   		if(false)
   		{
		window.mlcapimodeisdialog=true;
   		var surl=MyLiveChat.ScriptUrl;
   		MyLiveChat_DocWrite("<script onerror='LoaderScriptTagError()' src='" + MyLiveChat_HtmlEncode(MyLiveChat.UrlBase + "dialog.aspx?"+surl.substring(surl.indexOf('?')+1))+"'></scr" + "ipt>");	
   		MyLiveChat_DocWrite("<script onerror='LoaderScriptTagError()' src='" +  MyLiveChat.UrlBase + "script/dialoginit.js'></scr" + "ipt>");
	   }
	   else if(false)
   	{
   		MyLiveChat.IsDesignMode=true;
   	}
   	}

   	MyLiveChat['chatinline'+"_script_tag"]=MyLiveChat_GetLastScriptTag();

   	if(typeof(MyLiveChat_Initialize)=="undefined")
   	{
   		MyLiveChat_LoadMoreScripts();
   	}
   	else
   	{
   		MyLiveChat_Initialize()
   	}

