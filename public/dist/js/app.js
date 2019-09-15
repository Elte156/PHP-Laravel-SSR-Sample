function newsSearch(e) {
  e.preventDefault();
  try {
    window.location.href = "/news"+"?"+$.param({'search':$("#news--search").val()});
  } catch (e) {
    throw new Error(e.message);
  }
  return false;
}
