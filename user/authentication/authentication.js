function toggleSignup() {
  const signinSection = document.getElementById("signin-section");
  const signupSection = document.getElementById("signup-section");

  if (signinSection.classList.contains("d-none")) {
    signinSection.classList.remove("d-none");
    signupSection.classList.add("d-none");
  } else {
    signinSection.classList.add("d-none");
    signupSection.classList.remove("d-none");
  }
}
