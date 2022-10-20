export default null;

const headerClasses = document.querySelector('.website-header').classList;
const logoClasses = document.querySelector('.logo').classList;

if(scrollY === 0) {
  headerClasses.add('website-header--fancy');
  logoClasses.add('logo--fancy');
}

window.addEventListener('scroll', () => {
  if(scrollY > 0) {
    headerClasses.remove('website-header--fancy');
    logoClasses.remove('logo--fancy');
  } else {
    headerClasses.add('website-header--fancy');
    logoClasses.add('logo--fancy');
  }
});