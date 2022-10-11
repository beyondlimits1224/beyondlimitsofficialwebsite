/* on page load 'ALL' will be style into bold white
 * if user click the categories an style will apply
 * when user click the other categories. the style in 'All' * will be removed.
 */

const All = () => {
  let menu = document.querySelectorAll(".categories ul li a");
  let navclick = document.querySelector(".categories ul li");
  navclick.addEventListener("click", () => {
    for (let i = 0; i < menu.length; i++) {
      menu[i].classList.add("active");
      console.log("click");
    }
  });
};

All();
