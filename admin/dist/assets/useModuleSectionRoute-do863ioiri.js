import{R as e,w as f,E as N,aL as E,r as p,aM as L,_ as o,b as k,aN as D,H as M}from"../main-do863ioiri.js";/* empty css                            */function d({onClick:n,className:r,children:a}){return e.createElement("button",{type:"button",className:`urlslab-simple-button ${r}`,onClick:n||null},a)}const x=new Map([["overview",o("Overview","urlslab")],["settings",o("Settings","urlslab")]]);function G({moduleId:n,moduleMenu:r,activeSection:a,noSettings:C}){const l=f(t=>t.setActiveTable),c=N(t=>t.resetPanelsStore),i=E(t=>t.setUserLocalData);p.useEffect(()=>{l(),c()},[c,l]);const s=p.useCallback(t=>{l(),c(),i(n,{activeMenu:t})},[n,c,l,i]),u=t=>t===a?"active":"";return e.createElement("div",{className:"urlslab-moduleView-header"},e.createElement("div",{className:"urlslab-moduleView-headerTop"},e.createElement(L,{to:"overview"},e.createElement(d,{className:u("overview"),onClick:()=>s("overview")},x.get("overview"))),r?Array.from(r).map(([t,m])=>e.createElement(L,{key:t,to:t},e.createElement(d,{className:u(t),onClick:()=>s(t)},m))):null,!C&&e.createElement(L,{to:"settings"},e.createElement(d,{className:u("settings"),onClick:()=>s("settings")},x.get("settings")))))}const T="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'%20standalone='no'?%3e%3c!DOCTYPE%20svg%20PUBLIC%20'-//W3C//DTD%20SVG%201.1//EN'%20'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3e%3csvg%20width='100%25'%20height='100%25'%20viewBox='0%200%2024%2024'%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20xml:space='preserve'%20xmlns:serif='http://www.serif.com/'%20style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3e%3cg%20id='Artboard1'%20transform='matrix(1.0486,0,0,1.36585,0.973699,0.347628)'%3e%3crect%20x='-0.929'%20y='-0.255'%20width='22.888'%20height='17.571'%20style='fill:none;'/%3e%3cclipPath%20id='_clip1'%3e%3crect%20x='-0.929'%20y='-0.255'%20width='22.888'%20height='17.571'/%3e%3c/clipPath%3e%3cg%20clip-path='url(%23_clip1)'%3e%3cg%20transform='matrix(1.39317,0,0,1.06957,-2.02328,-1.22522)'%3e%3cpath%20d='M6.019,5.585L1.847,6.227C0.842,6.381%200.432,7.608%201.143,8.335L4.199,11.465L3.482,15.863C3.314,16.893%204.407,17.663%205.32,17.158L9,15.123L12.68,17.158C13.593,17.663%2014.686,16.893%2014.518,15.863L13.801,11.466L16.857,8.335C17.568,7.608%2017.158,6.381%2016.153,6.227L11.981,5.585L10.132,1.645C9.682,0.687%208.318,0.687%207.868,1.646L7.868,1.645L6.019,5.585ZM9,2.765L10.68,6.343C10.857,6.72%2011.21,6.985%2011.621,7.048L15.444,7.635L12.64,10.508C12.363,10.792%2012.237,11.19%2012.3,11.582L12.955,15.596L9.605,13.743C9.228,13.535%208.772,13.535%208.395,13.743L5.045,15.596L5.7,11.582C5.763,11.191%205.638,10.792%205.36,10.508L2.556,7.635L6.379,7.048C6.79,6.985%207.143,6.72%207.32,6.344L9,2.765Z'/%3e%3c/g%3e%3c/g%3e%3c/g%3e%3c/svg%3e",I="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'%20standalone='no'?%3e%3c!DOCTYPE%20svg%20PUBLIC%20'-//W3C//DTD%20SVG%201.1//EN'%20'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3e%3csvg%20width='100%25'%20height='100%25'%20viewBox='0%200%2024%2024'%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20xml:space='preserve'%20xmlns:serif='http://www.serif.com/'%20style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3e%3cg%20id='Artboard1'%20transform='matrix(1.35554,0,0,1.38496,0.530545,0.42705)'%3e%3crect%20x='-0.391'%20y='-0.308'%20width='17.705'%20height='17.329'%20style='fill:none;'/%3e%3cg%20transform='matrix(1.14226,0,0,1.118,-0.676954,-0.587851)'%3e%3cpath%20d='M4.25,2.942L2.331,2.942C1.78,2.944%201.251,3.164%200.861,3.554C0.471,3.944%200.252,4.472%200.25,5.023L0.25,7.394C0.25,7.611%200.336,7.819%200.489,7.972C0.489,7.972%200.49,7.972%200.49,7.972C0.643,8.125%200.851,8.212%201.067,8.212C1.067,8.212%201.973,8.212%201.973,8.212C2.56,8.212%203.035,8.731%203.043,9.318C3.043,9.318%203.043,9.318%203.043,9.318C3.052,9.915%202.595,10.481%202,10.481L1.067,10.481C0.85,10.481%200.642,10.567%200.489,10.721C0.336,10.874%200.25,11.081%200.25,11.298L0.25,13.669C0.252,14.22%200.471,14.749%200.861,15.139C0.861,15.139%200.861,15.139%200.861,15.139C1.251,15.529%201.78,15.748%202.331,15.75L4.702,15.75C4.919,15.75%205.126,15.664%205.279,15.511C5.433,15.358%205.519,15.149%205.519,14.933C5.519,14.933%205.519,14.228%205.519,14.228C5.519,13.61%206.02,13.072%206.638,13.058C7.227,13.044%207.789,13.414%207.789,14L7.789,14.933C7.789,15.149%207.875,15.358%208.028,15.511C8.181,15.664%208.389,15.75%208.606,15.75C8.606,15.75%2011,15.75%2011,15.75C11.546,15.75%2012.069,15.533%2012.455,15.147C12.841,14.761%2013.058,14.238%2013.058,13.692L13.058,11.75L13.333,11.75C14.678,11.75%2015.75,10.653%2015.75,9.304C15.75,7.95%2014.631,6.917%2013.306,6.917L13.058,6.917L13.058,5C13.058,4.454%2012.841,3.931%2012.455,3.545C12.069,3.159%2011.546,2.942%2011,2.942L9.083,2.942L9.083,2.694C9.083,1.373%208.03,0.273%206.709,0.25C6.389,0.245%206.07,0.303%205.772,0.422C5.474,0.541%205.202,0.718%204.973,0.943C4.744,1.168%204.563,1.436%204.438,1.732C4.314,2.028%204.25,2.345%204.25,2.666L4.25,2.942ZM9.289,14.25L9.289,14C9.289,12.569%208.04,11.525%206.603,11.558C6.603,11.558%206.603,11.558%206.603,11.558C5.185,11.591%204.019,12.809%204.019,14.228L4.019,14.25L2.335,14.25C2.18,14.249%202.032,14.188%201.922,14.078C1.812,13.968%201.751,13.82%201.75,13.665L1.75,11.981L2,11.981C3.409,11.981%204.563,10.71%204.543,9.297C4.524,7.907%203.363,6.712%201.973,6.712L1.75,6.712L1.75,5.028C1.751,4.873%201.812,4.724%201.922,4.614C2.032,4.505%202.18,4.443%202.335,4.442C2.335,4.442%204.933,4.442%204.933,4.442C5.15,4.442%205.357,4.356%205.511,4.203C5.664,4.05%205.75,3.842%205.75,3.625C5.75,3.625%205.75,2.667%205.75,2.667C5.75,2.545%205.774,2.424%205.822,2.312C5.869,2.2%205.938,2.098%206.024,2.013C6.111,1.927%206.214,1.86%206.327,1.815C6.327,1.815%206.327,1.815%206.327,1.815C6.44,1.77%206.561,1.748%206.683,1.75C6.683,1.75%206.683,1.75%206.683,1.75C7.189,1.759%207.583,2.188%207.583,2.694L7.583,3.625C7.583,3.842%207.669,4.05%207.823,4.203C7.976,4.356%208.184,4.442%208.401,4.442C8.401,4.442%2011,4.442%2011,4.442C11.148,4.442%2011.29,4.501%2011.394,4.606C11.394,4.606%2011.394,4.606%2011.394,4.606C11.499,4.71%2011.558,4.852%2011.558,5L11.558,7.599C11.558,7.817%2011.644,8.024%2011.798,8.178C11.951,8.331%2012.158,8.417%2012.375,8.417L13.306,8.417C13.808,8.417%2014.25,8.791%2014.25,9.304C14.25,9.821%2013.849,10.25%2013.334,10.25C13.334,10.25%2012.375,10.25%2012.375,10.25C12.158,10.25%2011.951,10.336%2011.798,10.488C11.644,10.642%2011.558,10.849%2011.558,11.067L11.558,13.692C11.558,13.84%2011.499,13.982%2011.394,14.087C11.29,14.191%2011.148,14.25%2011,14.25L9.289,14.25Z'/%3e%3c/g%3e%3c/g%3e%3c/svg%3e",y="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'%20standalone='no'?%3e%3c!DOCTYPE%20svg%20PUBLIC%20'-//W3C//DTD%20SVG%201.1//EN'%20'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3e%3csvg%20width='100%25'%20height='100%25'%20viewBox='0%200%2024%2024'%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20xml:space='preserve'%20xmlns:serif='http://www.serif.com/'%20style='fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;'%3e%3cg%20id='Artboard1'%20transform='matrix(0.99214,0,0,0.99214,1.02329,0.319102)'%3e%3crect%20x='-1.031'%20y='-0.322'%20width='24.19'%20height='24.19'%20style='fill:none;'/%3e%3cclipPath%20id='_clip1'%3e%3crect%20x='-1.031'%20y='-0.322'%20width='24.19'%20height='24.19'/%3e%3c/clipPath%3e%3cg%20clip-path='url(%23_clip1)'%3e%3cg%20transform='matrix(1.38229,0,0,1.38229,-1.37697,-0.667261)'%3e%3cpath%20d='M1.766,13.677L1.042,16.297C1.016,16.386%201,16.477%200.993,16.569L0.991,16.614C0.989,16.762%201.016,16.909%201.071,17.047L1.071,17.047C1.127,17.184%201.208,17.31%201.312,17.415C1.416,17.521%201.539,17.605%201.675,17.662L1.676,17.662C1.813,17.72%201.96,17.75%202.108,17.75L2.148,17.75L2.188,17.746C2.316,17.732%202.441,17.701%202.56,17.653C2.56,17.653%205.171,16.71%205.171,16.71L5.19,16.702C5.244,16.68%205.301,16.668%205.36,16.668L5.361,16.668C5.417,16.668%205.47,16.678%205.521,16.698C5.662,16.752%206.209,16.955%206.757,17.109C7.323,17.267%208.362,17.459%209.131,17.459C13.98,17.459%2017.75,13.562%2017.75,8.827L17.75,8.826C17.75,8.235%2017.687,7.646%2017.563,7.068C16.739,3.184%2013.218,0.25%208.993,0.25C4.146,0.25%200.236,4.095%200.25,8.822C0.25,10.473%200.735,12.087%201.643,13.464L1.716,13.571C1.732,13.6%201.752,13.645%201.766,13.677ZM2.676,16.016L3.242,13.967C3.333,13.635%203.208,13.157%203.018,12.825L2.875,12.609C2.145,11.494%201.75,10.172%201.75,8.821L1.75,8.82C1.738,4.911%204.987,1.75%208.993,1.75C12.49,1.75%2015.414,4.165%2016.096,7.381L16.096,7.381C16.198,7.857%2016.25,8.341%2016.25,8.827C16.25,12.738%2013.136,15.959%209.131,15.959C8.493,15.959%207.631,15.796%207.161,15.664C6.673,15.528%206.186,15.346%206.06,15.298L6.06,15.298C5.838,15.212%205.602,15.168%205.364,15.168C5.106,15.167%204.85,15.218%204.612,15.318L2.676,16.016Z'/%3e%3cpath%20d='M7.426,6.788C7.426,6.788%207.475,6.289%207.976,5.877C8.299,5.61%208.692,5.549%209.039,5.544C9.358,5.54%209.645,5.577%209.816,5.66C10.081,5.79%2010.633,6.082%2010.633,6.755C10.633,7.585%2010.032,7.909%209.43,8.323L9.43,8.323C8.335,9.076%208.084,9.831%208.084,10.677C8.084,11.091%208.42,11.427%208.834,11.427C9.248,11.427%209.584,11.091%209.584,10.677C9.584,10.266%209.748,9.924%2010.279,9.559C11.304,8.854%2012.133,8.166%2012.133,6.755C12.133,5.301%2011.048,4.593%2010.474,4.312L10.474,4.312C10.153,4.156%209.62,4.037%209.02,4.044L9.02,4.044C8.362,4.053%207.633,4.215%207.022,4.719L7.022,4.719C5.948,5.604%205.927,6.722%205.927,6.722C5.909,7.136%206.231,7.486%206.644,7.504C7.058,7.522%207.408,7.201%207.426,6.788Z'/%3e%3cpath%20d='M8.834,13.892C9.267,13.892%209.618,13.541%209.618,13.108C9.618,12.675%209.267,12.323%208.834,12.323C8.401,12.323%208.05,12.675%208.05,13.108C8.05,13.541%208.401,13.892%208.834,13.892Z'%20style='fill-rule:nonzero;'/%3e%3c/g%3e%3c/g%3e%3c/g%3e%3c/svg%3e";function U({moduleId:n,noFAQ:r,noIntegrate:a,title:C,customSections:l,section:c,children:i}){const[s,u]=p.useState("about"),{data:t}=k(),m=t?t[n]:null,v=w=>{u(w),c(w)};return e.createElement("div",{className:"urlslab-overview"},e.createElement("div",{className:"urlslab-panel flex-tablet fadeInto"},e.createElement("ul",{className:"urlslab-overview-menu"},e.createElement("li",{className:`urlslab-overview-menuItem ${s==="about"?"active":""}`},e.createElement("button",{onClick:()=>v("about")},e.createElement("span",{className:"urlslab-overview-menuIcon"},e.createElement("img",{src:T,alt:o("About","urlslab")})),o("About module","urlslab"))),!a&&e.createElement("li",{className:`urlslab-overview-menuItem ${s==="integrate"?"active":""}`},e.createElement("button",{onClick:()=>v("integrate")},e.createElement("span",{className:"urlslab-overview-menuIcon"},e.createElement("img",{src:I,alt:o("How to integrate","urlslab")})),o("How to integrate","urlslab"))),(l==null?void 0:l.length)>0&&l.map(w=>{const{id:g,title:h,icon:b}=w;return e.createElement("li",{className:`urlslab-overview-menuItem ${s===g?"active":""}`,key:g},e.createElement("button",{onClick:()=>v(g)},b&&e.createElement("span",{className:"urlslab-overview-menuIcon"},e.createElement("img",{src:b,alt:h})),h))}),!r&&e.createElement("li",{className:`urlslab-overview-menuItem ${s==="faq"?"active":""}`},e.createElement("button",{onClick:()=>v("faq")},e.createElement("span",{className:"urlslab-overview-menuIcon"},e.createElement("img",{src:y,alt:o("FAQ","urlslab")})),o("FAQ","urlslab")))),e.createElement("div",{className:"urlslab-overview-content"},C?e.createElement("h3",null," ",C," "):(m==null?void 0:m.title)&&e.createElement("h3",null," ",m.title," "),i)))}const P=(n,r=null)=>{const a=D(),{moduleId:C}=M(),l=Object.keys(a).length===0,c=r!==null?r:C,i=E(s=>s.userData[c]);return l&&i&&i.activeMenu?i.activeMenu:a.section&&n.includes(a.section)?a.section:"overview"},V=P;export{G as M,U as O,d as S,V as u};
