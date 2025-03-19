<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .dropdown select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
            width: 200px; 
            height: 45px; 
        }

        .container {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            gap: 20px;
            padding: 20px;
        }

        .search-panel {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
        }

        .dropdown {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }

        .search-button {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            background-color: #ff7f00;
            color: white;
            cursor: pointer;
            width: 200px; 
            height: 45px; 
            margin-top: 20px;
        }

        .search-button:hover {
            background-color: #e57000;
        }

        .view-buttons {
           margin-top: 10px;
            margin-left: 1050px;
        }

        .view-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        .view-buttons button:last-child {
            margin-right: 0;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .grid-item, .list-item {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
        }

        .list-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .list-item-details {
            flex-grow: 1;
        }

        / Add CSS for list view /
       .list-container {
            display: flex;
            flex-direction: column; / Display items vertically /
            padding: 20px;
        }

        .list-item {
            width: 100%; / Each item takes up full width /
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px; / Add spacing between items /
        }

        .list-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .list-item-details {
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="search-panel">
            <div class="dropdown">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="">Select Gender</option> 
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="dropdown">
                <label for="age">Age From:</label>
                <select id="age" name="age">

                <option value="" selected>Select</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
            </div>

            <div class="dropdown">
                <label for="ageTo">Age To:</label>
                <select id="ageTo" name="ageTo">
                <option value="" selected>Select</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                    </select>
                
            </div>

            <div class="dropdown">
                <label for="religion">Religion:</label>
                <select id="religion" name="religion">
                    <option value="">Select Religion</option> 
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Muslim">Muslim</option>
                </select>
            </div>

            <div class="dropdown">
                <label for="caste">Caste:</label>
                <select id="caste" name="caste">
                    <option value="">Select Caste</option> 
                </select>
            </div>
        
            <button type="button" id="submitBtn" class="search-button">Submit</button>
        </div>

        <div class="view-buttons">
            <button id="gridViewBtn">Grid View</button>
            <button id="listViewBtn">List View</button>
        </div>

        <div id="userDetails"></div>
    </div>

    <script>
        const genderSelect = document.getElementById('gender');
        const ageFromSelect = document.getElementById('age');
        const ageToSelect = document.getElementById('ageTo');
        const religionSelect = document.getElementById('religion');
        const casteSelect = document.getElementById('caste');
        const submitBtn = document.getElementById('submitBtn');
        const gridViewBtn = document.getElementById('gridViewBtn');
        const listViewBtn = document.getElementById('listViewBtn');
        const userDetailsDiv = document.getElementById('userDetails');

        // genderSelect.addEventListener('change', populateAgeOptions);
        // genderSelect.addEventListener('change', populateAgeToOptions);
        religionSelect.addEventListener('change', populateCasteOptions);
        submitBtn.addEventListener('click', fetchUserDetails);
        gridViewBtn.addEventListener('click', showGridView);
        listViewBtn.addEventListener('click', showListView);

        // const ageRangeMale = { min: 23, max: 48 };
        // const ageRangeFemale = { min: 18, max: 50 };

        // function populateAgeOptions() {
        //     const selectedGender = genderSelect.value;
        //     ageFromSelect.innerHTML = '';

        //     const ageRange = selectedGender === 'Male' ? ageRangeMale : ageRangeFemale;

        //     for (let age = ageRange.min; age <= ageRange.max; age++) {
        //         addOption(ageFromSelect, age);
        //     }
        // }

        // function populateAgeToOptions() {
        //     const selectedGender = genderSelect.value;
        //     ageToSelect.innerHTML = '';

        //     const ageRange = selectedGender === 'Male' ? ageRangeMale : ageRangeFemale;

        //     for (let age = ageRange.min + 1; age <= ageRange.max; age++) {
        //         addOption(ageToSelect, age);
        //     }
        // }

        function addOption(selectElement, value) {
            const option = document.createElement('option');
            option.value = value;
            option.textContent = value;
            selectElement.appendChild(option);
        }

        function populateCasteOptions() {
            const selectedReligion = religionSelect.value;
            casteSelect.innerHTML = '';

            if (selectedReligion === 'Hindu') {
                const castes = ['Reddy', 'Chowdhary', 'Vaishya', 'Brahmin'];
                castes.forEach(caste => addOption(casteSelect, caste));
            } else if (selectedReligion === 'Christian') {
                const castes = ['CATHALIC', 'Protestant', 'Orthodox'];
                castes.forEach(caste => addOption(casteSelect, caste));
            } else if (selectedReligion === 'Muslim') {
                const castes = ['shaik', 'SYED', 'Pathan'];
                castes.forEach(caste => addOption(casteSelect, caste));
            }
        }

        function fetchUserDetails() {
            const formData = new FormData();
            formData.append('gender', genderSelect.value);
            formData.append('ageFrom', ageFromSelect.value);
            formData.append('ageTo', ageToSelect.value);
            formData.append('religion', religionSelect.value);
            formData.append('caste', casteSelect.value);
            formData.append('viewType', 'grid');

            fetch('display_details.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                userDetailsDiv.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        }

        function showGridView() {
            fetchUserDetails();
        }

        function showListView() {
            const formData = new FormData();
            formData.append('gender', genderSelect.value);
            formData.append('ageFrom', ageFromSelect.value);
            formData.append('ageTo', ageToSelect.value);
            formData.append('religion', religionSelect.value);
            formData.append('caste', casteSelect.value);
            formData.append('viewType', 'list');

            fetch('display_details.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                userDetailsDiv.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        }

        // Initial population of age options
        populateAgeOptions();
        populateAgeToOptions();
        populateCasteOptions();
    </script>
</body>
</html>
