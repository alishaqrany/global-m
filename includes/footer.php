</div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->

        <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>




    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    
    
    
        <script>
        function updateManufacturingYear() {
            // الحصول على قيمة رقم شاسيه السيارة
            var chassisNumber = document.getElementById('chassisNo').value;

            // الحصول على الحرف العاشر من جهة اليسار
            var character = chassisNumber.charAt(9).toUpperCase(); // تحويل الحرف إلى صيغة كبيرة

            // جدول التحويل
            var yearTable = {
                'Y': 2000, '1': 2001, '2': 2002, '3': 2003, '4': 2004, '5': 2005,
                '6': 2006, '7': 2007, '8': 2008, '9': 2009, 'A': 2010, 'B': 2011,
                'C': 2012, 'D': 2013, 'E': 2014, 'F': 2015, 'G': 2016, 'H': 2017,
                'J': 2018, 'K': 2019, 'L': 2020, 'M': 2021, 'N': 2022, 'P': 2023,
                'R': 2024, 'S': 2025, 'T': 2026, 'V': 2027, 'W': 2028, 'X': 2029
            };

            // تحديد سنة التصنيع
            var manufacturingYear = yearTable[character];
            
            // عرض سنة التصنيع في الحقل المخصص
            document.getElementById('year').value = manufacturingYear;
        }
    </script>
    
    

</body>

</html>