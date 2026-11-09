<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{
    --navy:#0b1b3f; --navy-2:#13285a; --paper:#ffffff; --mist:#f4f6fb;
    --line:#dde3f0; --muted:#5b688a; --soft:#b9c4e0; --pink:#ff2e93;
}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Plus Jakarta Sans',system-ui,sans-serif;color:var(--navy);background:var(--paper);
    min-height:100vh;display:flex;flex-direction:column;line-height:1.6}
a{color:inherit;text-decoration:none}
h1,h2,h3{line-height:1.2;letter-spacing:-.02em}
.wrap{width:100%;max-width:1080px;margin:0 auto;padding-left:1.25rem;padding-right:1.25rem}
.page{padding-top:3rem;padding-bottom:4rem;flex:1;display:flex;flex-direction:column;gap:3.5rem}
.full{flex:1;display:flex}
.muted{color:var(--muted);font-size:.95rem}
.pop{color:var(--pink)}
.rule{display:block;width:44px;height:3px;background:var(--pink);margin:1.1rem 0}
.eyebrow,.label{font-size:.75rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase;color:var(--pink)}
.label{margin-bottom:.6rem}

/* Navbar */
.navbar{position:sticky;top:0;z-index:20;background:var(--paper);border-bottom:1px solid var(--line)}
.navbar-inner{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;padding-top:1rem;padding-bottom:1rem}
.brand{font-weight:800;font-size:1.15rem;letter-spacing:-.02em}
.brand span{color:var(--pink)}
.nav-links{display:flex;align-items:center;gap:1.8rem}
.nav-links a{font-size:.92rem;font-weight:500;color:var(--muted);padding:.3rem 0;transition:color .15s}
.nav-links a:hover{color:var(--navy)}
.nav-links a.active{color:var(--navy);font-weight:700;box-shadow:inset 0 -2px 0 var(--pink)}
.nav-links .nav-out{margin-left:.6rem;padding:.4rem .9rem;border:1px solid var(--line);border-radius:6px}
.nav-links .nav-out:hover{border-color:var(--navy)}
.nav-toggle,.nav-burger{display:none}
.nav-burger{font-size:.9rem;font-weight:600;cursor:pointer;padding:.4rem .9rem;border:1px solid var(--line);border-radius:6px}

/* Hero */
.hero{
    background:
        linear-gradient(90deg, rgba(11,27,63,.92) 0%, rgba(11,27,63,.7) 45%, rgba(11,27,63,.25) 100%),
        url('{{ asset('images/kon.png') }}') center 30% / cover no-repeat;
    color:#fff;padding:4.5rem 0 4rem;overflow:hidden
}
.hero h1{font-size:clamp(2.2rem,6vw,3.6rem);font-weight:800}
.hero-text{max-width:560px;color:var(--soft);font-size:1.05rem}

/* Stats */
.grid{display:grid;gap:1.25rem}
.grid-3{grid-template-columns:repeat(3,1fr)}
.grid-split{grid-template-columns:1fr 1.2fr;gap:3.5rem}
.stat{border:1px solid var(--line);border-top:3px solid var(--navy);padding:1.4rem 1.5rem;background:var(--paper)}
.stat-value{font-size:2.6rem;font-weight:800;line-height:1}
.stat-label{color:var(--muted);font-size:.9rem;margin-top:.4rem}

/* Text sections */
h2{font-size:1.6rem;font-weight:800;margin-bottom:.9rem}
.body-text{color:var(--muted);max-width:520px}
.timeline{list-style:none;border-left:1px solid var(--line);margin-left:.3rem}
.timeline li{position:relative;padding:0 0 1.3rem 1.4rem;display:flex;flex-direction:column}
.timeline li::before{content:"";position:absolute;left:-5px;top:.45rem;width:9px;height:9px;border-radius:50%;background:var(--paper);border:2px solid var(--navy)}
.timeline li.latest::before{background:var(--pink);border-color:var(--pink)}
.time{font-size:.78rem;font-weight:700;color:var(--muted);letter-spacing:.06em;text-transform:uppercase}

/* Projects */
.page-head h1{font-size:clamp(2rem,5vw,2.8rem);font-weight:800}
.projects{border-top:1px solid var(--navy)}
.project{display:grid;grid-template-columns:64px 1fr auto;gap:1.5rem;padding:1.8rem 0;border-bottom:1px solid var(--line)}
.num{font-weight:800;font-size:1.1rem;color:var(--pink)}
.project h3{font-size:1.25rem;font-weight:700;margin-bottom:.3rem}
.project-meta{text-align:right;display:flex;flex-direction:column;gap:.3rem;font-size:.88rem}
.year{font-weight:700}
.status{color:var(--muted)}
.status::before{content:"";display:inline-block;width:7px;height:7px;border-radius:50%;margin-right:.45rem;background:var(--soft)}
.status.live::before{background:var(--pink)}
.tags{display:flex;flex-wrap:wrap;gap:.45rem;margin-top:.8rem}
.tag{font-size:.78rem;font-weight:600;padding:.25rem .7rem;border:1px solid var(--navy);border-radius:4px}

/* Profile */
.wide{max-width:1360px}
.profile{display:grid;grid-template-columns:290px 1fr 440px;gap:2.5rem;align-items:start}
.profile-char{position:sticky;top:6rem}
.profile-char img{display:block;width:82%;height:auto;margin-left:auto;filter:drop-shadow(0 18px 22px rgba(11,27,63,.28))}
.profile-side{background:var(--mist);padding:2rem;border-top:3px solid var(--navy)}
.avatar{width:92px;height:92px;background:var(--navy);color:#fff;display:grid;place-items:center;font-size:2.6rem;font-weight:800;border-bottom:4px solid var(--pink);margin-bottom:1.2rem}
.profile-side h1{font-size:1.6rem;font-weight:800;word-break:break-word}
.detail{display:grid;gap:.9rem}
.detail dt{font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.detail dd{font-weight:500;word-break:break-word}
.block{padding-bottom:2.2rem;margin-bottom:2.2rem;border-bottom:1px solid var(--line)}
.block:last-child{border-bottom:0}
.block h3{font-size:1.1rem;margin-bottom:.3rem}
.skill-row{display:grid;grid-template-columns:110px 1fr;gap:1rem;align-items:start;padding:.9rem 0;border-bottom:1px solid var(--line)}
.skill-row:last-child{border-bottom:0}
.skill-row .tags{margin-top:0}
.skill-row h3{font-size:.95rem;margin:.2rem 0 0}
.plain-list{list-style:none;margin-top:.9rem;display:grid;grid-template-columns:repeat(2,1fr);gap:.5rem 1.5rem}
.plain-list li{padding-left:1rem;position:relative}
.plain-list li::before{content:"";position:absolute;left:0;top:.7rem;width:5px;height:2px;background:var(--pink)}

/* Login */
.login{display:grid;grid-template-columns:1fr 1fr;width:100%;min-height:100vh}
.login-side{
    background:
        linear-gradient(180deg, rgba(11,27,63,.9) 0%, rgba(11,27,63,.55) 50%, rgba(11,27,63,.15) 100%),
        url('{{ asset('images/kokoron.png') }}') center / cover no-repeat;
    color:#fff;padding:4.5rem 3.5rem;display:flex;flex-direction:column;justify-content:flex-start;overflow:hidden
}
.login-side h1{font-size:clamp(2rem,4vw,3rem);font-weight:800;margin-top:.8rem}
.side-text{color:var(--soft);max-width:340px}
.login-form{display:flex;align-items:center;justify-content:center;padding:3rem 1.5rem}
.login-form form{width:100%;max-width:370px;display:flex;flex-direction:column;gap:.45rem}
.login-form h2{margin-bottom:.1rem}
.login-form .muted{margin-bottom:1.2rem}
label{font-size:.82rem;font-weight:600;margin-top:.6rem}
input{width:100%;padding:.8rem .95rem;border:1px solid var(--line);border-radius:6px;font:inherit;color:var(--navy);background:var(--paper);outline:none;transition:border-color .15s}
input:focus{border-color:var(--navy);box-shadow:0 0 0 3px rgba(11,27,63,.08)}
.error{color:var(--pink);font-size:.82rem;font-weight:500}
.btn{margin-top:1.3rem;padding:.9rem;border:0;border-radius:6px;background:var(--navy);color:#fff;font:inherit;font-weight:700;cursor:pointer;box-shadow:inset 0 -3px 0 var(--pink);transition:background .15s}
.btn:hover{background:var(--navy-2)}

/* Footer */
.footer{border-top:1px solid var(--line);color:var(--muted);font-size:.85rem}
.footer-inner{display:flex;justify-content:space-between;gap:1rem;flex-wrap:wrap;padding-top:1.3rem;padding-bottom:1.3rem}

/* Responsive */
@media (max-width:1300px){
    .profile{grid-template-columns:290px 1fr}
    .profile-char{grid-column:1 / -1;position:static;max-width:380px;margin:0 auto}
}
@media (max-width:860px){
    .grid-split,.profile{grid-template-columns:1fr;gap:2.5rem}
    .login{grid-template-columns:1fr}
    .login-side{padding:3rem 1.5rem;min-height:380px}
    .hero{background:linear-gradient(rgba(11,27,63,.78), rgba(11,27,63,.78)), url('{{ asset('images/foto.png') }}') center / cover no-repeat}
}
@media (max-width:640px){
    .grid-3{grid-template-columns:1fr}
    .nav-burger{display:block}
    .nav-links{display:none;flex-direction:column;align-items:stretch;gap:.2rem;width:100%;padding-top:.8rem}
    .nav-links .nav-out{margin:.4rem 0 0;text-align:center}
    .nav-toggle:checked ~ .nav-links{display:flex}
    .project{grid-template-columns:1fr;gap:.5rem}
    .project-meta{text-align:left;flex-direction:row;gap:1rem}
    .skill-row{grid-template-columns:1fr;gap:.2rem}
    .plain-list{grid-template-columns:1fr}
}
</style>