/* on page load 'ALL' will be style into bold white
 * if user click the categories an style will apply
 * when user click the other categories. the style in 'All' * will be removed.
 */

const All = () => {
  let menu = document.querySelectorAll(".categories ul li");

  menu[0].classList.add("active");

  for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener(
      "click",
      () => {
        menu[i].classList.add("active");
      },
      false
    );
  }
};

All();
