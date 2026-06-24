(function(){
  const nav=document.getElementById('mainNav');
  const annBar=document.getElementById('annBar');
  window.addEventListener('scroll',()=>{
    const s=window.scrollY;
    if(s>80){nav.classList.add('scrolled')}else{nav.classList.remove('scrolled')}
    if(s>200){nav.classList.add('bar-hidden');if(annBar)annBar.style.transform='translateY(-100%)'}
    else{nav.classList.remove('bar-hidden');if(annBar)annBar.style.transform='translateY(0)'}
  });

  const hero = document.getElementById('hero');
  if(hero){
    const slides = hero.querySelectorAll('.hero-img-slide');
    const dots = hero.querySelectorAll('.hero-img-dot');
    const prevBtn = hero.querySelector('.hero-img-arrow-prev');
    const nextBtn = hero.querySelector('.hero-img-arrow-next');
    if(slides.length&&prevBtn&&nextBtn){
      let current = 0, autoplay;
      function goTo(index){
        if(index===current) return;
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (index + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
      }
      function nextSlide(){ goTo(current + 1); }
      function prevSlide(){ goTo(current - 1); }
      function startAutoplay(){ autoplay = setInterval(nextSlide, 3000); }
      function stopAutoplay(){ clearInterval(autoplay); }
      nextBtn.addEventListener('click', ()=>{ stopAutoplay(); nextSlide(); startAutoplay(); });
      prevBtn.addEventListener('click', ()=>{ stopAutoplay(); prevSlide(); startAutoplay(); });
      dots.forEach((d,i)=>d.addEventListener('click',()=>{ stopAutoplay(); goTo(i); startAutoplay(); }));
      hero.addEventListener('mouseenter', stopAutoplay);
      hero.addEventListener('mouseleave', startAutoplay);
      setTimeout(()=>{ hero.querySelectorAll('.hero-animate').forEach(el=>el.classList.add('visible')); }, 80);
      setTimeout(nextSlide, 500);
      startAutoplay();
    }
  }

  setTimeout(()=>{
    document.querySelectorAll('.hero-animate').forEach(el=>el.classList.add('visible'));
  }, 120);

  const navToggle=document.getElementById('navToggle');
  const navOffcanvas=document.getElementById('navOffcanvas');
  const offcanvasClose=document.getElementById('offcanvasClose');
  const offcanvasBackdrop=document.getElementById('offcanvasBackdrop');
  if(navToggle&&navOffcanvas&&offcanvasClose&&offcanvasBackdrop){
    const body=document.body;
    function openOffcanvas(){
      navToggle.classList.add('active');
      navOffcanvas.classList.add('open');
      offcanvasBackdrop.classList.add('show');
      body.style.overflow='hidden';
    }
    function closeOffcanvas(){
      navToggle.classList.remove('active');
      navOffcanvas.classList.remove('open');
      offcanvasBackdrop.classList.remove('show');
      body.style.overflow='';
    }
    navToggle.addEventListener('click',openOffcanvas);
    offcanvasClose.addEventListener('click',closeOffcanvas);
    offcanvasBackdrop.addEventListener('click',closeOffcanvas);
    document.addEventListener('keydown',function(e){if(e.key==='Escape')closeOffcanvas()});
    navOffcanvas.querySelectorAll('.menu-item-has-children>a').forEach(function(link){
      link.addEventListener('click',function(e){
        e.preventDefault();
        var parent=link.parentElement;
        var sub=parent.querySelector('.sub-menu');
        if(!sub)return;
        var wasOpen=parent.classList.contains('open');
        navOffcanvas.querySelectorAll('.menu-item-has-children.open').forEach(function(el){el.classList.remove('open')});
        if(!wasOpen)parent.classList.add('open');
      });
    });
  }

  const observer=new IntersectionObserver((entries)=>{
    entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible')});
  },{threshold:0.1,rootMargin:'0px 0px -60px 0px'});
  document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

  const story = document.getElementById('scienceStory');
  if(story){
    const panels     = story.querySelectorAll('.scroll-panel');
    const bgSlides   = story.querySelectorAll('.scroll-bg-slide');
    const pills      = story.querySelectorAll('.scroll-tab-pill');
    const dots       = story.querySelectorAll('.scroll-dot');
    const progressBar= document.getElementById('sciProgressBar');
    const scrollHint = document.getElementById('sciScrollHint');
    const total = panels.length;
    let current = 0, hintHidden = false;

    function setPanel(idx){
      if(idx === current && panels[current].classList.contains('active')) return;
      panels[current].classList.remove('active','entering');
      panels[current].classList.add('exiting');
      bgSlides[current].classList.remove('active');
      setTimeout(()=>{ panels[current].classList.remove('exiting'); }, 750);
      current = idx;
      panels[current].classList.remove('exiting','active');
      panels[current].classList.add('entering');
      bgSlides[current].classList.add('active');
      requestAnimationFrame(()=>{
        requestAnimationFrame(()=>{
          panels[current].classList.remove('entering');
          panels[current].classList.add('active');
        });
      });
      pills.forEach((p,i) => p.classList.toggle('active', i===idx));
      dots.forEach((d,i)  => d.classList.toggle('active',  i===idx));
    }

    function onScroll(){
      const rect  = story.getBoundingClientRect();
      const total_h = story.offsetHeight - window.innerHeight;
      const scrolled  = -rect.top;
      if(scrolled < 0 || scrolled > total_h) return;
      const progress = scrolled / total_h;
      const panelIndex = Math.min(total - 1, Math.floor(progress * total));
      if(panelIndex !== current) setPanel(panelIndex);
      const panelProgress = (progress * total) - panelIndex;
      if(progressBar) progressBar.style.width = ((panelIndex + panelProgress) / total * 100) + '%';
      if(!hintHidden && progress > 0.08){
        hintHidden = true;
        if(scrollHint) scrollHint.classList.add('hidden');
      }
    }

    function scrollToPanel(idx){
      const sectionTop = story.getBoundingClientRect().top + window.scrollY;
      const total_h    = story.offsetHeight - window.innerHeight;
      window.scrollTo({ top: sectionTop + (idx / total) * total_h + 10, behavior: 'smooth' });
    }

    pills.forEach((p,i) => p.addEventListener('click', () => scrollToPanel(i)));
    dots.forEach((d,i)  => d.addEventListener('click', () => scrollToPanel(i)));
    panels.forEach((p,i) => { p.classList.remove('active','entering','exiting'); if(i===0) p.classList.add('active'); });
    bgSlides.forEach((s,i) => { s.classList.remove('active'); if(i===0) s.classList.add('active'); });
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  document.querySelectorAll('.cform-input').forEach(input => {
    if (input.value.trim() !== '') { input.classList.add('has-value'); }
    input.addEventListener('blur', () => {
      input.value.trim() !== '' ? input.classList.add('has-value') : input.classList.remove('has-value');
    });
  });

  document.querySelectorAll('.training-faq-question, .homebased-faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      const container = btn.closest('.training-faq-list, .homebased-faq-list');
      if(container){
        container.querySelectorAll('.training-faq-question, .homebased-faq-question').forEach(b => b.setAttribute('aria-expanded', 'false'));
        container.querySelectorAll('.training-faq-answer, .homebased-faq-answer').forEach(a => a.classList.remove('open'));
      }
      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        if(btn.nextElementSibling) btn.nextElementSibling.classList.add('open');
      }
    });
  });
})();
