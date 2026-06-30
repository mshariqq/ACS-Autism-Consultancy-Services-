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
      requestAnimationFrame(()=>{ hero.querySelectorAll('.hero-animate').forEach(el=>el.classList.add('visible')); });
      setTimeout(nextSlide, 500);
      startAutoplay();
    }
  }

  requestAnimationFrame(()=>{
    requestAnimationFrame(()=>{
      document.querySelectorAll('.hero-animate').forEach(el=>el.classList.add('visible'));
    });
  });

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
    const panels = story.querySelectorAll('.scroll-panel');
    const pills = story.querySelectorAll('.scroll-tab-pill');
    const tabCount = panels.length;
    if(!tabCount) return;

    let isMobile = window.innerWidth < 768;

    function setSectionHeight(){
      if(isMobile){ story.style.height = ''; return }
      story.style.height = (tabCount * window.innerHeight) + 'px';
    }

    function updateTabs(){
      if(isMobile) return;
      const rect = story.getBoundingClientRect();
      const vh = window.innerHeight;
      const sh = story.offsetHeight;
      const scrollable = sh - vh;
      if(scrollable <= 0) return;
      const progress = Math.max(0, Math.min(1, -rect.top / scrollable));
      const index = Math.min(tabCount - 1, Math.floor(progress * tabCount));
      panels.forEach((p,i) => p.classList.toggle('active', i===index));
      pills.forEach((p,i) => p.classList.toggle('active', i===index));
    }

    function handleResize(){
      isMobile = window.innerWidth < 768;
      setSectionHeight();
      if(isMobile){
        panels.forEach((p,i) => p.classList.toggle('active', i===0));
        pills.forEach((p,i) => p.classList.toggle('active', i===0));
      } else {
        updateTabs();
      }
    }

    pills.forEach((pill, i) => {
      pill.addEventListener('click', () => {
        if(isMobile){
          panels.forEach((p,j) => p.classList.toggle('active', j===i));
          pills.forEach((p,j) => p.classList.toggle('active', j===i));
          return;
        }
        const rect = story.getBoundingClientRect();
        const vh = window.innerHeight;
        const sh = story.offsetHeight;
        const scrollable = sh - vh;
        const targetScroll = window.scrollY + rect.top + (i / tabCount * scrollable);
        window.scrollTo({top: targetScroll, behavior: 'smooth'});
      });
    });

    setSectionHeight();
    window.addEventListener('scroll', updateTabs, {passive: true});
    window.addEventListener('resize', handleResize);
    updateTabs();
  }

  document.querySelectorAll('.cform-input').forEach(input => {
    if (input.value.trim() !== '') { input.classList.add('has-value'); }
    input.addEventListener('focus', () => { input.classList.add('has-value'); });
    input.addEventListener('blur', () => {
      input.value.trim() !== '' ? input.classList.add('has-value') : input.classList.remove('has-value');
    });
  });

  document.querySelectorAll('select.cform-input').forEach(function(sel) {
    if (sel.value) sel.classList.add('has-value');
    sel.addEventListener('change', function() {
      this.value ? this.classList.add('has-value') : this.classList.remove('has-value');
    });
  });

  (function(){
    var track=document.getElementById('booksCarouselTrack');
    if(track){
      var viewport=track.parentElement;
      var dotsEl=document.getElementById('booksCarouselDots');
      var prevBtn=document.querySelector('.books-carousel-prev');
      var nextBtn=document.querySelector('.books-carousel-next');
      var cards=track.children,total=cards.length;
      if(total<2)return;
      var cur=0,vis=5;
      function getVis(){var w=window.innerWidth;return w<768?1:w<1024?3:5}
      function upd(){
        var max=Math.max(0,total-vis);cur=Math.min(cur,max);
        var card=cards[0],cw=card.offsetWidth,gap=24;
        track.style.transform='translateX(-'+(cur*(cw+gap))+'px)';
        if(prevBtn)prevBtn.disabled=cur===0;
        if(nextBtn)nextBtn.disabled=cur>=max;
        if(dotsEl){
          var n=max+1;
          while(dotsEl.children.length<n){var d=document.createElement('button');d.className='books-carousel-dot';dotsEl.appendChild(d)}
          while(dotsEl.children.length>n)dotsEl.removeChild(dotsEl.lastElementChild);
          Array.from(dotsEl.children).forEach(function(d,i){d.classList.toggle('active',i===cur);d.onclick=function(){cur=i;upd()}})
        }
      }
      function onResize(){var nv=getVis();if(nv!==vis){vis=nv;cur=Math.min(cur,Math.max(0,total-vis))}upd()}
      vis=getVis();upd();
      if(prevBtn)prevBtn.addEventListener('click',function(){if(cur>0){cur--;upd()}});
      if(nextBtn)nextBtn.addEventListener('click',function(){var max=total-vis;if(cur<max){cur++;upd()}});
      window.addEventListener('resize',onResize);
    }
  })();

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
