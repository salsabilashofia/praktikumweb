<?php
$data = [
    ['nama'=>'Andi', 'nim'=>'2101001','uts'=>87,'uas'=>65],
    ['nama'=>'Budi', 'nim'=>'2101002','uts'=>80,'uas'=>79],
    ['nama'=>'Tono', 'nim'=>'2101003','uts'=>50,'uas'=>90],
    ['nama'=>'Jessica', 'nim'=>'2101004','uts'=>60,'uas'=>75]
];

for($i=0; $i < count($data); $i++){
    $data[$i]['nilai']=($data[$i]['uts']*40/100)+($data[$i]['uas']*60/100);
    if($data[$i]['nilai']>=80 and $data[$i]['nilai']<=100){
        $data[$i]['huruf'] = 'A';
    }
    else if($data[$i]['nilai']>=70 and $data[$i]['nilai']<80){
        $data[$i]['huruf'] = 'B';
    }
    else if($data[$i]['nilai']>=60 and $data[$i]['nilai']<70){
        $data[$i]['huruf'] = 'C';
    }
    else if($data[$i]['nilai']>=50 and $data[$i]['nilai']<60){
        $data[$i]['huruf'] = 'D';
    }
    else if($data[$i]['nilai']>0 and $data[$i]['nilai']<50){
        $data[$i]['huruf'] = 'E';
    }
}
?>

<html>
<head>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        border: 1px solid;
        padding: 5px;
    }
    th{
        border: 1px solid;
        background-color: #D3D3D3;
    }
</style>
<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>
    <?php for($i=0; $i < count($data); $i++):?>
    <tr>
        <td><?php echo $data[$i]['nama']; ?></td>
        <td><?php echo $data[$i]['nim']; ?></td>
        <td><?php echo $data[$i]['uts']; ?></td>
        <td><?php echo $data[$i]['uas']; ?></td>
        <td><?php echo $data[$i]['nilai']; ?></td>
        <td><?php echo $data[$i]['huruf']; ?></td>
    </tr>
    <?php endfor?>
</table>
</html>