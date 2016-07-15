<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Название', '{domain}'),
    ),

   'table' => array(
        'type'  => 'wp-editor',
        'value' => ' <div class="conv__box">
            <table>
                <tbody>
                <tr>
                    <th class="row">US</th>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                </tr>
                <tr>
                    <th class="row">UK</th>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                    <td><a href="#">30</a></td>
                </tr>
                <tr>
                    <th class="row">EUROPE</th>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                </tr>
                <tr>
                    <th class="row">RUSSIA</th>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                    <td><a href="#">40</a></td>
                </tr>
                <tr>
                    <th class="row">JAPAN</th>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                    <td><a href="#">32</a></td>
                </tr>
                <tr>
                    <th class="row">KOREA</th>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                    <td><a href="#">80</a></td>
                </tr>
                <tbody>
                <tfoot>
                <tr>
                    <th class="col">S-M-L</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                    <th class="col">XXS</th>
                </tr>
                <tfoot>
            </table>
        </div>',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),

        'size' => 'large', // small, large
        'editor_height' => 400,
    )
);

