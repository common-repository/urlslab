import{w as u,r as l,R as t,_ as c,x as f,V as i,W as T,L as E,X as y,M as L,C as M,Y as z}from"../main-do863ioiri.js";const _="cache_crc32",w={cache_content:c("Cache content","urlslab"),cache_len:c("Cache size","urlslab"),date_changed:c("Last change","urlslab")};function F({slug:n}){const s=u(r=>r.setTable),[a,o]=l.useState(!1);return l.useEffect(()=>{o(!0),s(n,{paginationId:_,slug:n,header:w})},[s,n]),a&&t.createElement(S,{slug:n})}function S({slug:n}){const{columnHelper:s,data:a,isLoading:o,isSuccess:r,isFetchingNextPage:d,ref:b}=f({slug:n}),m=l.useMemo(()=>{var e;return(e=a==null?void 0:a.pages)==null?void 0:e.flatMap(p=>p??[])},[a==null?void 0:a.pages]),h=u(e=>e.setTable),g=l.useMemo(()=>[s.accessor("cache_content",{tooltip:e=>e.getValue(),header:e=>t.createElement(i,{...e}),size:300}),s.accessor("cache_len",{cell:e=>`${Math.round(e.getValue()/1024,0)} kB`,header:e=>t.createElement(i,{...e}),size:80}),s.accessor("date_changed",{cell:e=>t.createElement(T,{datetime:e.getValue()}),header:e=>t.createElement(i,{...e}),size:115})],[s]);return l.useEffect(()=>{h(n,{data:a})},[a,h,n]),o?t.createElement(E,{isFullscreen:!0}):t.createElement(t.Fragment,null,t.createElement(y,{title:c("About this table","urlslab"),tableSlug:n,isMainTableDescription:!0},c("You can use the Content Lazy Loading feature by enabling it in the Settings tab. The portions of your webpage that will be lazy-loaded are determined by the class name, which is also set in the Settings tab. When the Lazy Loading option for HTML is activated, the plugin captures the HTML during the page creation process and stores the lazy-loaded section in a database table. This table displays a list of HTML elements from your webpage that are lazy-loaded. When a visitor scrolls to a lazy-loaded element on the page, the element is subsequently loaded from this table in the background and then displayed in the browser. Each cached HTML segment can be accessed via a unique URL.","urlslab")),t.createElement(L,null),t.createElement(M,{className:"fadeInto",columns:g,data:r&&m,referrer:b,loadingRows:d},t.createElement(z,null)))}export{F as default};
