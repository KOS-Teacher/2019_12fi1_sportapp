  function worksheetCopy($students, $Klasse){

    write-Host "bla"
    write-host $students

    $objexcel=New-Object -ComObject Excel.Application
    $workbook=$objexcel.WorkBooks.Open('C:\Temp\demo.xlsx')
    #$workbook=$objexcel.WorkBooks.Open('H:\13\demo.xlsx')


    foreach($student in $students)
    {
        write-host "blabala"
        write-host $student

        #add one worksheet per student
        $workbook.Worksheets.Item(1).Copy($workbook.Worksheets.Item(1))
        $newSheet = $workbook.Worksheets.Item(2)
        $newSheet.Activate()
        $name = [string]$student
        $newSheet.Name = $name

        $worksheet=$workbook.WorkSheets.item($name)
        
        $worksheet.Cells.Item(1,1)= $student
        $worksheet.Cells.Item(2,1)= $Klasse



    }

    $workbook.SaveAs("C:\temp\"+ $Klasse +".xlsx”)

    $filename =  "C:\temp\export_excel_"+$Klasse+".pdf"

    $workbook.ExportAsFixedFormat($xlFixedFormat::xlTypePDF, $filename)

    <#

    for ($i = 1; $i -le 3; $i++)
    {
        $workbook.Worksheets.Item(1).Copy($workbook.Worksheets.Item(1))
        $newSheet = $workbook.Worksheets.Item(2)
        $newSheet.Activate()
        $name = "Summary$i"
        $newSheet.Name = $name

        $lastSheet = $workbook.WorkSheets.Item($workbook.WorkSheets.Count) 
        $newSheet.Move([System.Reflection.Missing]::Value, $lastSheet)
        
         $Workbook.SaveAs("C:\temp\"+ $i+".xlsx”)
             
    }
   
   #>

    $objexcel.Quit()
   

}
 
 
 function saveExcel($students, $Klasse){

    $objexcel=New-Object -ComObject Excel.Application
    $workbook=$objexcel.WorkBooks.Open('C:\Temp\demo.xlsx')
    #$workbook=$objexcel.WorkBooks.Open('H:\13\demo.xlsx')



    #Aufbau der Worksheets pro Klasse
    foreach($student in $students)
    {
        write-host "blabala"
        write-host $student

        #add one worksheet per student
        $workbook.Worksheets.Item(1).Copy($workbook.Worksheets.Item(1))
        $newSheet = $workbook.Worksheets.Item(2)
        $newSheet.Activate()
        $name = [string]$student
        $newSheet.Name = $name

    }

    $workbook.SaveAs("C:\temp\"+ $Klasse +".xlsx”)



    $worksheet=$workbook.WorkSheets.item(1)
    $objexcel.Visible=$true
    $worksheet.Cells.Item(1,1)= $students[0]
    $worksheet.Cells.Item(2,1)= $Klasse
 

    $filename =  "C:\temp\export_excel_"+$Klasse+".pdf"

    $workbook.ExportAsFixedFormat($xlFixedFormat::xlTypePDF, $filename)
    #$workbook.ExportAsFixedFormat($xlFixedFormat::xlTypePDF, 'C:\temp\export_excel_$klasse.pdf') 
    #$workbook.ExportAsFixedFormat($xlFixedFormat::xlTypePDF, 'H:\13\export_excel.pdf') 
    #$workbook.Close($false)



    $objexcel.Quit()
}


## Variablen für Zugriff auf Datenbank


# the connection string used to connect to the database 
$connString = "Server=localhost;Uid=root;Pwd='';database=sporttag"; 
# 
# 
# load MySQL driver and query database 
[void][system.reflection.Assembly]::LoadFrom("C:\Program Files (x86)\MySQL\MySQL Connector Net 8.0.18\Assemblies\v4.5.2\MySql.Data.dll"); 

$conn = New-Object MySql.Data.MySqlClient.MySqlConnection; 
$conn.ConnectionString = $connString; 
$command = New-Object MySql.Data.MySqlClient.MySqlCommand; 
$command.Connection = $conn; 


$command.CommandText = "SELECT Klasse_ID FROM Klasse";
 
$conn.Open()
#$service = Get-Service | Select-Object -first 1
$reader = $command.ExecuteReader(); 




#$klassen = @()  #leerer Array

$klassen = @{}  #leerer Hash  Key  --- Value
                #             12FI1 --- Array von Students


$maher = ""

while($reader.Read()) { 
    
    $maher = $reader[0]
   
    #$klassen += $reader.GetString(0) ##Array-Variante ###############
    $klassen[$maher]=$maher 
 }


 $conn.close()

 

 foreach($klasse in $klassen.Keys)
 {
    Write-Host "blabla" $klassen[$Klasse]
   

    $klassenname = $klassen[$Klasse]
    
    $student_per_class = @()

    $command.CommandText = "SELECT Schueler_ID FROM schueler where klasse_id = '$klassenname'" ;
 
    $conn.Open()

    $reader = $command.ExecuteReader(); 
    
    while($reader.Read()) { 
    
        $schuelerid = $reader[0]
   
    #$klassen += $reader.GetString(0) ##Array-Variante ###############
    #[$schuelerid]=$schuelerid
    
    $student_per_class += $schuelerid



    }
    $conn.close()
    Write-Host $student_per_class

            #alle Schüler der Klasse 12FI3
    #saveExcel $student_per_class $klassenname
    worksheetCopy  $student_per_class $klassenname

 }


