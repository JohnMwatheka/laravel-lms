<div class="pb-4 row align-items-center dashboard-copyright-content">
    <div class="col-lg-6">
        <p class="copy-desc" > &copy; <span id="copyright-year"></span> JK online academy. All Rights Reserved.</p>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14 justify-content-end">
            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
        </ul>
    </div><!-- end col-lg-6 -->
</div><!-- end row -->
<script>
    // Select the element where the copyright year should be updated
    const copyrightYearElement = document.getElementById('copyright-year');

    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the element
    if (copyrightYearElement) {
    copyrightYearElement.textContent = currentYear;
    }
</script>