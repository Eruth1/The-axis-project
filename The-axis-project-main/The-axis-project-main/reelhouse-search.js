/* Reel House site search: jumps to the best matching page or section. */
(function () {
  var PAGES = [
    { title: "Home", url: "index.html", words: "home start main reel house digital media agency" },
    { title: "Work: recent stories", url: "index.html#work", words: "work portfolio case studies stories results tiktok instagram youtube ca phe nha fitbox saigon stay hotels bloom skincare vespa technest hoc tieng anh nhanh green bowl kitchen" },
    { title: "Services", url: "index.html#services", words: "services short-form video social media management paid ads branding web design logo website" },
    { title: "Pricing", url: "index.html#pricing", words: "pricing price cost plans starter growth studio monthly budget" },
    { title: "Apply to join the team (form)", url: "index.html#contact", words: "apply application form join team job reference name email phone skills address" },
    { title: "About us: The Axis team", url: "apply.html", words: "about us team group axis students tutor members class student ids interests hometown behind the scenes" },
    { title: "Jobs", url: "jobs.html", words: "jobs careers vacancies positions roles hiring" },
    { title: "Contact", url: "contact.html", words: "contact get in touch email apply form call" }
  ];

  function norm(s) {
    return s.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").replace(/\u0111/g, "d");
  }

  function score(page, tokens) {
    var hay = norm(page.title + " " + page.words), n = 0;
    tokens.forEach(function (t) { if (hay.indexOf(t) !== -1) n++; });
    return n;
  }

  function init() {
    var form = document.querySelector("form.search");
    if (!form) return;
    var input = form.querySelector("input[type=search]");
    var list = form.querySelector("datalist");
    var msg = form.querySelector(".search-msg");

    PAGES.forEach(function (p) {
      var o = document.createElement("option");
      o.value = p.title;
      list.appendChild(o);
    });

    input.addEventListener("input", function () { msg.textContent = ""; });

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var q = norm(input.value).trim();
      if (!q) { msg.textContent = "Type something to search."; return; }
      var tokens = q.split(/\s+/);
      var best = null, bestScore = 0;
      PAGES.forEach(function (p) {
        var exact = norm(p.title) === q ? 100 : 0;
        var s = score(p, tokens) + exact;
        if (s > bestScore) { best = p; bestScore = s; }
      });
      if (!best) { msg.textContent = "No results for \u201C" + input.value.trim() + "\u201D. Try work, pricing, jobs or about."; return; }
      window.location.href = best.url;
    });
  }

  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", init);
  else init();
})();
