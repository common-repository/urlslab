import{r as o,R as e,v as y,O as b,ah as i,Q as w,U as C,aY as v,aZ as f,a_ as N,a$ as u,b0 as z,b1 as A,b2 as E,b3 as I}from"../main-do863ioiri.js";const c=o.createContext({}),T=t=>t||v(t)||Array.isArray(t)||typeof t=="string"&&t!=="",$=({sourceData:t,isTableCellPopper:r})=>{if(!T(t))return null;let a=null,n=!1;if(typeof t=="string")try{a=JSON.parse(t)}catch{a=t,n=!0}else a=t;if(!a)return null;const l=I(a);return e.createElement(c.Provider,{value:{data:a,sourceData:t,isNested:l,isSimpleText:n}},r?e.createElement(h,null):e.createElement(L,null))},L=o.memo(()=>{const{data:t,isSimpleText:r}=o.useContext(c);return e.createElement(S,null,r?t:e.createElement(s,{data:t}))}),h=o.memo(()=>{const{data:t,sourceData:r,isSimpleText:a}=o.useContext(c),[n,l]=o.useState(!1),m=o.useRef();return y(m,()=>l(!1)),e.createElement(b,{placement:"bottom-start",title:e.createElement(i,{ref:m},e.createElement(S,{isTableCellPopper:!0},a?t:e.createElement(s,{data:t}))),open:n,sx:p=>({zIndex:`calc( ${p.vars.zIndex.table} - 1 )`})},e.createElement(i,{className:n&&"opened",onClick:()=>l(!n),sx:p=>({cursor:"pointer","& .text-wrapper":{transition:`opacity ${p.transition.general.duration}`},"& .MuiIconButton-root":{position:"absolute",top:"50%",left:"50%",opacity:0,transform:"translate(-50%, -50%)"},"&:hover, &.opened":{"& .text-wrapper":{opacity:.5},"& .MuiIconButton-root":{opacity:1}}})},e.createElement(i,{className:"text-wrapper ellipsis"},r),e.createElement(w,{size:"xs",variant:"soft",color:"primary"},e.createElement(C,{name:"eye"}))))}),s=o.memo(({data:t,dataKey:r})=>{if(r===void 0){if(Array.isArray(t))return t.map((a,n)=>e.createElement(s,{key:n,data:a,dataKey:n}));if(v(t))return Object.entries(t).map(([a,n])=>e.createElement(s,{key:a,data:n,dataKey:a}))}return Array.isArray(t)?t.length!==0?e.createElement(d,null,e.createElement(f,null,e.createElement(x,null,e.createElement("span",{className:"title-value"},r),e.createElement("span",{className:"data-value"},"(",t.length,")")),e.createElement(g,null,t.map((a,n)=>e.createElement(s,{key:n,data:a,dataKey:n}))))):e.createElement(s,{data:"[ ]",dataKey:r}):v(t)?e.createElement(d,null,e.createElement(f,null,e.createElement(x,null,e.createElement("span",{className:"title-value"},r),e.createElement("span",{className:"data-value"},"(",Object.keys(t).length,")")),e.createElement(g,null,Object.entries(t).map(([a,n])=>e.createElement(s,{key:a,data:n,dataKey:a}))))):e.createElement(d,null,e.createElement(i,{sx:{pl:"var(--row-paddingLeft)",display:"flex"}},r!==void 0?e.createElement(e.Fragment,null,e.createElement("span",{className:"title-value"},r,":"),e.createElement("span",{className:"data-value"},String(t))):e.createElement("span",{className:"data-value"},String(t))))}),S=o.memo(({children:t,isTableCellPopper:r})=>{const{isNested:a,isSimpleText:n}=o.useContext(c);return e.createElement(i,{className:"urlslab-scrollbar",sx:l=>({"--indicator-color":"currentcolor","--row-paddingLeft":a?l.spacing(2.5):0,overflow:"auto",...r&&{"--variant-plainColor":l.vars.palette.common.white,"--indicator-color":l.vars.palette.common.white,"--custom-divider-color":`rgba(${l.vars.palette.neutral.lightChannel} / 0.3 )`,"--custom-Icon-fontSize":l.vars.fontSize.sm,"--custom-fontSize":l.vars.fontSize.xs,maxHeight:"20rem",...!n&&{minWidth:"15rem"},...n&&r&&{maxWidth:"40rem"}}})},t)}),d=o.memo(({children:t})=>e.createElement(N,{size:"sm",sx:r=>({"--ListItem-paddingY":0,"--ListItem-minHeight":0,"--ListItem-paddingLeft":0,"--ListItem-paddingX":0,"--variant-plainHoverBg":" transparent","--variant-plainActiveBg":" transparent","--variant-plainHoverColor":"currentcolor","--Icon-fontSize":`var(--custom-Icon-fontSize, ${r.vars.fontSize.md} )`,fontSize:`var(--custom-fontSize, ${r.vars.fontSize.md})`,".title-value":{mr:1},".data-value":{opacity:.8,maxWidth:"25em"},[`& .${u.button}`]:{pl:"var(--row-paddingLeft)",justifyContent:"left","--Icon-color":"var(--indicator-color)"},[`& .${u.indicator}`]:{transform:"rotate(-90deg)",transition:"0.2s",position:"absolute",left:0},[`& [aria-expanded="true"] .${u.indicator}`]:{transform:"rotate(0deg)"}})},t)),x=o.memo(({children:t})=>e.createElement(z,null,t)),g=o.memo(({children:t})=>e.createElement(A,{sx:r=>({pl:"calc( var(--row-paddingLeft) / 2 )",ml:"calc( var(--row-paddingLeft) / 2 - 2px )",borderLeft:`1px solid var( --custom-divider-color, ${r.vars.palette.divider} )`,[`& .${E.content}.${E.expanded}`]:{overflow:"visible",".data-value":{}}})},t)),j=o.memo($);export{j as T};
