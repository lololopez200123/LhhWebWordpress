(function (d) {
  const tabs = Array.prototype.slice.apply(d.querySelectorAll('.c-tabs__tab'));
  const panels = Array.prototype.slice.apply(d.querySelectorAll('.c-tabs__panel'));
  tabs[0].setAttribute('aria-selected', 'true');
  panels.map((panel) => panel.setAttribute('aria-hidden', 'true'));
  panels[0].removeAttribute('aria-hidden');
  d.querySelector('.c-tabs__tabbar').addEventListener('click', (e) => {
    if (e.target.classList.contains('c-tabs__tab')) {
      const i = tabs.indexOf(e.target);
      tabs.map((tab) => tab.removeAttribute('aria-selected', 'true'));
      tabs[i].setAttribute('aria-selected', 'true');
      panels.map((panel) => panel.setAttribute('aria-hidden', 'true'));
      panels[i].removeAttribute('aria-hidden');
    }
  });
}(document));
