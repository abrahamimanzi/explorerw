<style>
    .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 200px;
        height: 200px;
    }

    .cropit-preview-image-container {
        cursor: move;
    }
</style><script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
    }
</script>
  <input type="hidden" name="webToken" value="56">
  <input type="hidden" name="request" value="participant-editCategory">
  <input type="hidden" name="participant-event_id" value="<?=$event_ID?>">
  <input type="hidden" name="participant-company_id" value="<?=$company_data->ID?>">
  <input type="hidden" name="participant-id" value="<?=$participant_data->ID?>">
  <div class="form-group">
    <label for="category">Category</label>
    <select name="participant-category" id="category" class="form-control bordered" required="required">
       
        <option value="" <?php if($participant_data->category == ''){ echo 'selected="selected"';}?>> [--Select--] </option>


        
            <option value="Exhibition-Visitor" <?php if($participant_data->category == 'Exhibition-Visitor'){ echo 'selected="selected"';}?>>Exhibition-Visitor</option>
        
            <option value="Individual-Silver" <?php if($participant_data->category == 'Individual-Silver'){ echo 'selected="selected"';}?>>Individual-Silver</option>
        
            <option value="Individual-Gold" <?php if($participant_data->category == 'Individual-Gold'){ echo 'selected="selected"';}?>>Individual-Gold</option>
        
            <option value="Individual-Platinum" <?php if($participant_data->category == 'Individual-Platinum'){ echo 'selected="selected"';}?>>Individual-Platinum</option>
        
            <option value="Individual-Silver-Discounted" <?php if($participant_data->category == 'Individual-Silver-Discounted'){ echo 'selected="selected"';}?>>Individual-Silver-Discounted</option>
        
            <option value="Individual-Gold-Discounted" <?php if($participant_data->category == 'Individual-Gold-Discounted'){ echo 'selected="selected"';}?>>Individual-Gold-Discounted</option>
        
            <option value="Individual-Platinum-Discounted" <?php if($participant_data->category == 'Individual-Platinum-Discounted'){ echo 'selected="selected"';}?>>Individual-Platinum-Discounted</option>
        
            <option value="Individual-Silver-Complimentary" <?php if($participant_data->category == 'Individual-Silver-Complimentary'){ echo 'selected="selected"';}?>>Individual-Silver-Complimentary</option>
        
            <option value="Individual-Gold-Complimentary" <?php if($participant_data->category == 'Individual-Gold-Complimentary'){ echo 'selected="selected"';}?>>Individual-Gold-Complimentary</option>
        
            <option value="Individual-Platinum-Complimentary" <?php if($participant_data->category == 'Individual-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Individual-Platinum-Complimentary</option>
        
            <option value="Group-Silver" <?php if($participant_data->category == 'Group-Silver'){ echo 'selected="selected"';}?>>Group-Silver</option>
        
            <option value="Group-Gold" <?php if($participant_data->category == 'Group-Gold'){ echo 'selected="selected"';}?>>Group-Gold</option>
        
            <option value="Group-Platinum" <?php if($participant_data->category == 'Group-Platinum'){ echo 'selected="selected"';}?>>Group-Platinum</option>
        
            <option value="Group-Silver-Discounted" <?php if($participant_data->category == 'Group-Silver-Discounted'){ echo 'selected="selected"';}?>>Group-Silver-Discounted</option>
        
            <option value="Group-Gold-Discounted" <?php if($participant_data->category == 'Group-Gold-Discounted'){ echo 'selected="selected"';}?>>Group-Gold-Discounted</option>
        
            <option value="Group-Platinum-Discounted" <?php if($participant_data->category == 'Group-Platinum-Discounted'){ echo 'selected="selected"';}?>>Group-Platinum-Discounted</option>
        
            <option value="Group-Silver-Complimentary" <?php if($participant_data->category == 'Group-Silver-Complimentary'){ echo 'selected="selected"';}?>>Group-Silver-Complimentary</option>
        
            <option value="Group-Gold-Complimentary" <?php if($participant_data->category == 'Group-Gold-Complimentary'){ echo 'selected="selected"';}?>>Group-Gold-Complimentary</option>
        
            <option value="Group-Platinum-Complimentary" <?php if($participant_data->category == 'Group-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Group-Platinum-Complimentary</option>
        
            <option value="Sponsor-Silver" <?php if($participant_data->category == 'Sponsor-Silver'){ echo 'selected="selected"';}?>>Sponsor-Silver</option>
        
            <option value="Sponsor-Gold" <?php if($participant_data->category == 'Sponsor-Gold'){ echo 'selected="selected"';}?>>Sponsor-Gold</option>
        
            <option value="Sponsor-Platinum" <?php if($participant_data->category == 'Sponsor-Platinum'){ echo 'selected="selected"';}?>>Sponsor-Platinum</option>
        
            <option value="Sponsor-Silver-Discounted" <?php if($participant_data->category == 'Sponsor-Silver-Discounted'){ echo 'selected="selected"';}?>>Sponsor-Silver-Discounted</option>
        
            <option value="Sponsor-Gold-Discounted" <?php if($participant_data->category == 'Sponsor-Gold-Discounted'){ echo 'selected="selected"';}?>>Sponsor-Gold-Discounted</option>
        
            <option value="Sponsor-Platinum-Discounted" <?php if($participant_data->category == 'Sponsor-Platinum-Discounted'){ echo 'selected="selected"';}?>>Sponsor-Platinum-Discounted</option>
        
            <option value="Sponsor-Silver-Complimentary" <?php if($participant_data->category == 'Sponsor-Silver-Complimentary'){ echo 'selected="selected"';}?>>Sponsor-Silver-Complimentary</option>
        
            <option value="Sponsor-Gold-Complimentary" <?php if($participant_data->category == 'Sponsor-Gold-Complimentary'){ echo 'selected="selected"';}?>>Sponsor-Gold-Complimentary</option>
        
            <option value="Sponsor-Platinum-Complimentary" <?php if($participant_data->category == 'Sponsor-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Sponsor-Platinum-Complimentary</option>
        
            <option value="Exhibitor-Silver" <?php if($participant_data->category == 'Exhibitor-Silver'){ echo 'selected="selected"';}?>>Exhibitor-Silver</option>
        
            <option value="Exhibitor-Gold" <?php if($participant_data->category == 'Exhibitor-Gold'){ echo 'selected="selected"';}?>>Exhibitor-Gold</option>
        
            <option value="Exhibitor-Platinum" <?php if($participant_data->category == 'Exhibitor-Platinum'){ echo 'selected="selected"';}?>>Exhibitor-Platinum</option>
        
            <option value="Exhibitor-Silver-Discounted" <?php if($participant_data->category == 'Exhibitor-Silver-Discounted'){ echo 'selected="selected"';}?>>Exhibitor-Silver-Discounted</option>
        
            <option value="Exhibitor-Gold-Discounted" <?php if($participant_data->category == 'Exhibitor-Gold-Discounted'){ echo 'selected="selected"';}?>>Exhibitor-Gold-Discounted</option>
        
            <option value="Exhibitor-Platinum-Discounted" <?php if($participant_data->category == 'Exhibitor-Platinum-Discounted'){ echo 'selected="selected"';}?>>Exhibitor-Platinum-Discounted</option>
        
            <option value="Exhibitor-Silver-Complimentary" <?php if($participant_data->category == 'Exhibitor-Silver-Complimentary'){ echo 'selected="selected"';}?>>Exhibitor-Silver-Complimentary</option>
        
            <option value="Exhibitor-Gold-Complimentary" <?php if($participant_data->category == 'Exhibitor-Gold-Complimentary'){ echo 'selected="selected"';}?>>Exhibitor-Gold-Complimentary</option>
        
            <option value="Exhibitor-Platinum-Complimentary" <?php if($participant_data->category == 'Exhibitor-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Exhibitor-Platinum-Complimentary</option>
        
            <option value="Government-Silver" <?php if($participant_data->category == 'Government-Silver'){ echo 'selected="selected"';}?>>Government-Silver</option>
        
            <option value="Government-Gold" <?php if($participant_data->category == 'Government-Gold'){ echo 'selected="selected"';}?>>Government-Gold</option>
        
            <option value="Government-Platinum" <?php if($participant_data->category == 'Government-Platinum'){ echo 'selected="selected"';}?>>Government-Platinum</option>
        
            <option value="Government-Silver-Discounted" <?php if($participant_data->category == 'Government-Silver-Discounted'){ echo 'selected="selected"';}?>>Government-Silver-Discounted</option>
        
            <option value="Government-Gold-Discounted" <?php if($participant_data->category == 'Government-Gold-Discounted'){ echo 'selected="selected"';}?>>Government-Gold-Discounted</option>
        
            <option value="Government-Platinum-Discounted" <?php if($participant_data->category == 'Government-Platinum-Discounted'){ echo 'selected="selected"';}?>>Government-Platinum-Discounted</option>
        
            <option value="Government-Silver-Complimentary" <?php if($participant_data->category == 'Government-Silver-Complimentary'){ echo 'selected="selected"';}?>>Government-Silver-Complimentary</option>
        
            <option value="Government-Gold-Complimentary" <?php if($participant_data->category == 'Government-Gold-Complimentary'){ echo 'selected="selected"';}?>>Government-Gold-Complimentary</option>
        
            <option value="Government-Platinum-Complimentary" <?php if($participant_data->category == 'Government-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Government-Platinum-Complimentary</option>
        
            <option value="Smart-Africa-Member-Silver" <?php if($participant_data->category == 'Smart-Africa-Member-Silver'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Silver</option>
        
            <option value="Smart-Africa-Member-Gold" <?php if($participant_data->category == 'Smart-Africa-Member-Gold'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Gold</option>
        
            <option value="Smart-Africa-Member-Platinum" <?php if($participant_data->category == 'Smart-Africa-Member-Platinum'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Platinum</option>
        
            <option value="Smart-Africa-Member-Silver-Discounted" <?php if($participant_data->category == 'Smart-Africa-Member-Silver-Discounted'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Silver-Discounted</option>
        
            <option value="Smart-Africa-Member-Gold-Discounted" <?php if($participant_data->category == 'Smart-Africa-Member-Gold-Discounted'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Gold-Discounted</option>
        
            <option value="Smart-Africa-Member-Platinum-Discounted" <?php if($participant_data->category == 'Smart-Africa-Member-Platinum-Discounted'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Platinum-Discounted</option>
        
            <option value="Smart-Africa-Member-Silver-Complimentary" <?php if($participant_data->category == 'Smart-Africa-Member-Silver-Complimentary'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Silver-Complimentary</option>
        
            <option value="Smart-Africa-Member-Gold-Complimentary" <?php if($participant_data->category == 'Smart-Africa-Member-Gold-Complimentary'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Gold-Complimentary</option>
        
            <option value="Smart-Africa-Member-Platinum-Complimentary" <?php if($participant_data->category == 'Smart-Africa-Member-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Smart-Africa-Member-Platinum-Complimentary</option>
        
            <option value="Diplomatic-Mission-Silver" <?php if($participant_data->category == 'Diplomatic-Mission-Silver'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Silver</option>
        
            <option value="Diplomatic-Mission-Gold" <?php if($participant_data->category == 'Diplomatic-Mission-Gold'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Gold</option>
        
            <option value="Diplomatic-Mission-Platinum" <?php if($participant_data->category == 'Diplomatic-Mission-Platinum'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Platinum</option>
        
            <option value="Diplomatic-Mission-Silver-Discounted" <?php if($participant_data->category == 'Diplomatic-Mission-Silver-Discounted'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Silver-Discounted</option>
        
            <option value="Diplomatic-Mission-Gold-Discounted" <?php if($participant_data->category == 'Diplomatic-Mission-Gold-Discounted'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Gold-Discounted</option>
        
            <option value="Diplomatic-Mission-Platinum-Discounted" <?php if($participant_data->category == 'Diplomatic-Mission-Platinum-Discounted'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Platinum-Discounted</option>
        
            <option value="Diplomatic-Mission-Silver-Complimentary" <?php if($participant_data->category == 'Diplomatic-Mission-Silver-Complimentary'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Silver-Complimentary</option>
        
            <option value="Diplomatic-Mission-Gold-Complimentary" <?php if($participant_data->category == 'Diplomatic-Mission-Gold-Complimentary'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Gold-Complimentary</option>
        
            <option value="Diplomatic-Mission-Platinum-Complimentary" <?php if($participant_data->category == 'Diplomatic-Mission-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Diplomatic-Mission-Platinum-Complimentary</option>
        
            <option value="Private-Sector-Federation-Silver" <?php if($participant_data->category == 'Private-Sector-Federation-Silver'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Silver</option>
        
            <option value="Private-Sector-Federation-Gold" <?php if($participant_data->category == 'Private-Sector-Federation-Gold'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Gold</option>
        
            <option value="Private-Sector-Federation-Platinum" <?php if($participant_data->category == 'Private-Sector-Federation-Platinum'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Platinum</option>
        
            <option value="Private-Sector-Federation-Silver-Discounted" <?php if($participant_data->category == 'Private-Sector-Federation-Silver-Discounted'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Silver-Discounted</option>
        
            <option value="Private-Sector-Federation-Gold-Discounted" <?php if($participant_data->category == 'Private-Sector-Federation-Gold-Discounted'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Gold-Discounted</option>
        
            <option value="Private-Sector-Federation-Platinum-Discounted" <?php if($participant_data->category == 'Private-Sector-Federation-Platinum-Discounted'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Platinum-Discounted</option>
        
            <option value="Private-Sector-Federation-Silver-Complimentary" <?php if($participant_data->category == 'Private-Sector-Federation-Silver-Complimentary'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Silver-Complimentary</option>
        
            <option value="Private-Sector-Federation-Gold-Complimentary" <?php if($participant_data->category == 'Private-Sector-Federation-Gold-Complimentary'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Gold-Complimentary</option>
        
            <option value="Private-Sector-Federation-Platinum-Complimentary" <?php if($participant_data->category == 'Private-Sector-Federation-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Private-Sector-Federation-Platinum-Complimentary</option>
        
            <option value="Development-Partners-Silver" <?php if($participant_data->category == 'Development-Partners-Silver'){ echo 'selected="selected"';}?>>Development-Partners-Silver</option>
        
            <option value="Development-Partners-Gold" <?php if($participant_data->category == 'Development-Partners-Gold'){ echo 'selected="selected"';}?>>Development-Partners-Gold</option>
        
            <option value="Development-Partners-Platinum" <?php if($participant_data->category == 'Development-Partners-Platinum'){ echo 'selected="selected"';}?>>Development-Partners-Platinum</option>
        
            <option value="Development-Partners-Silver-Discounted" <?php if($participant_data->category == 'Development-Partners-Silver-Discounted'){ echo 'selected="selected"';}?>>Development-Partners-Silver-Discounted</option>
        
            <option value="Development-Partners-Gold-Discounted" <?php if($participant_data->category == 'Development-Partners-Gold-Discounted'){ echo 'selected="selected"';}?>>Development-Partners-Gold-Discounted</option>
        
            <option value="Development-Partners-Platinum-Discounted" <?php if($participant_data->category == 'Development-Partners-Platinum-Discounted'){ echo 'selected="selected"';}?>>Development-Partners-Platinum-Discounted</option>
        
            <option value="Development-Partners-Silver-Complimentary" <?php if($participant_data->category == 'Development-Partners-Silver-Complimentary'){ echo 'selected="selected"';}?>>Development-Partners-Silver-Complimentary</option>
        
            <option value="Development-Partners-Gold-Complimentary" <?php if($participant_data->category == 'Development-Partners-Gold-Complimentary'){ echo 'selected="selected"';}?>>Development-Partners-Gold-Complimentary</option>
        
            <option value="Development-Partners-Platinum-Complimentary" <?php if($participant_data->category == 'Development-Partners-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Development-Partners-Platinum-Complimentary</option>
        
            <option value="Moderator-Silver" <?php if($participant_data->category == 'Moderator-Silver'){ echo 'selected="selected"';}?>>Moderator-Silver</option>
        
            <option value="Moderator-Gold" <?php if($participant_data->category == 'Moderator-Gold'){ echo 'selected="selected"';}?>>Moderator-Gold</option>
        
            <option value="Moderator-Platinum" <?php if($participant_data->category == 'Moderator-Platinum'){ echo 'selected="selected"';}?>>Moderator-Platinum</option>
        
            <option value="Moderator-Silver-Discounted" <?php if($participant_data->category == 'Moderator-Silver-Discounted'){ echo 'selected="selected"';}?>>Moderator-Silver-Discounted</option>
        
            <option value="Moderator-Gold-Discounted" <?php if($participant_data->category == 'Moderator-Gold-Discounted'){ echo 'selected="selected"';}?>>Moderator-Gold-Discounted</option>
        
            <option value="Moderator-Platinum-Discounted" <?php if($participant_data->category == 'Moderator-Platinum-Discounted'){ echo 'selected="selected"';}?>>Moderator-Platinum-Discounted</option>
        
            <option value="Moderator-Silver-Complimentary" <?php if($participant_data->category == 'Moderator-Silver-Complimentary'){ echo 'selected="selected"';}?>>Moderator-Silver-Complimentary</option>
        
            <option value="Moderator-Gold-Complimentary" <?php if($participant_data->category == 'Moderator-Gold-Complimentary'){ echo 'selected="selected"';}?>>Moderator-Gold-Complimentary</option>
        
            <option value="Moderator-Platinum-Complimentary" <?php if($participant_data->category == 'Moderator-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Moderator-Platinum-Complimentary</option>
        
            <option value="Panelist-Silver" <?php if($participant_data->category == 'Panelist-Silver'){ echo 'selected="selected"';}?>>Panelist-Silver</option>
        
            <option value="Panelist-Gold" <?php if($participant_data->category == 'Panelist-Gold'){ echo 'selected="selected"';}?>>Panelist-Gold</option>
        
            <option value="Panelist-Platinum" <?php if($participant_data->category == 'Panelist-Platinum'){ echo 'selected="selected"';}?>>Panelist-Platinum</option>
        
            <option value="Panelist-Silver-Discounted" <?php if($participant_data->category == 'Panelist-Silver-Discounted'){ echo 'selected="selected"';}?>>Panelist-Silver-Discounted</option>
        
            <option value="Panelist-Gold-Discounted" <?php if($participant_data->category == 'Panelist-Gold-Discounted'){ echo 'selected="selected"';}?>>Panelist-Gold-Discounted</option>
        
            <option value="Panelist-Platinum-Discounted" <?php if($participant_data->category == 'Panelist-Platinum-Discounted'){ echo 'selected="selected"';}?>>Panelist-Platinum-Discounted</option>
        
            <option value="Panelist-Silver-Complimentary" <?php if($participant_data->category == 'Panelist-Silver-Complimentary'){ echo 'selected="selected"';}?>>Panelist-Silver-Complimentary</option>
        
            <option value="Panelist-Gold-Complimentary" <?php if($participant_data->category == 'Panelist-Gold-Complimentary'){ echo 'selected="selected"';}?>>Panelist-Gold-Complimentary</option>
        
            <option value="Panelist-Platinum-Complimentary" <?php if($participant_data->category == 'Panelist-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Panelist-Platinum-Complimentary</option>
        
            <option value="Speaker-Silver" <?php if($participant_data->category == 'Speaker-Silver'){ echo 'selected="selected"';}?>>Speaker-Silver</option>
        
            <option value="Speaker-Gold" <?php if($participant_data->category == 'Speaker-Gold'){ echo 'selected="selected"';}?>>Speaker-Gold</option>
        
            <option value="Speaker-Platinum" <?php if($participant_data->category == 'Speaker-Platinum'){ echo 'selected="selected"';}?>>Speaker-Platinum</option>
        
            <option value="Speaker-Silver-Discounted" <?php if($participant_data->category == 'Speaker-Silver-Discounted'){ echo 'selected="selected"';}?>>Speaker-Silver-Discounted</option>
        
            <option value="Speaker-Gold-Discounted" <?php if($participant_data->category == 'Speaker-Gold-Discounted'){ echo 'selected="selected"';}?>>Speaker-Gold-Discounted</option>
        
            <option value="Speaker-Platinum-Discounted" <?php if($participant_data->category == 'Speaker-Platinum-Discounted'){ echo 'selected="selected"';}?>>Speaker-Platinum-Discounted</option>
        
            <option value="Speaker-Silver-Complimentary" <?php if($participant_data->category == 'Speaker-Silver-Complimentary'){ echo 'selected="selected"';}?>>Speaker-Silver-Complimentary</option>
        
            <option value="Speaker-Gold-Complimentary" <?php if($participant_data->category == 'Speaker-Gold-Complimentary'){ echo 'selected="selected"';}?>>Speaker-Gold-Complimentary</option>
        
            <option value="Speaker-Platinum-Complimentary" <?php if($participant_data->category == 'Speaker-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Speaker-Platinum-Complimentary</option>
        
            <option value="Face-the-Gorillas-Silver" <?php if($participant_data->category == 'Face-the-Gorillas-Silver'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Silver</option>
        
            <option value="Face-the-Gorillas-Gold" <?php if($participant_data->category == 'Face-the-Gorillas-Gold'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Gold</option>
        
            <option value="Face-the-Gorillas-Platinum" <?php if($participant_data->category == 'Face-the-Gorillas-Platinum'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Platinum</option>
        
            <option value="Face-the-Gorillas-Silver-Discounted" <?php if($participant_data->category == 'Face-the-Gorillas-Silver-Discounted'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Silver-Discounted</option>
        
            <option value="Face-the-Gorillas-Gold-Discounted" <?php if($participant_data->category == 'Face-the-Gorillas-Gold-Discounted'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Gold-Discounted</option>
        
            <option value="Face-the-Gorillas-Platinum-Discounted" <?php if($participant_data->category == 'Face-the-Gorillas-Platinum-Discounted'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Platinum-Discounted</option>
        
            <option value="Face-the-Gorillas-Silver-Complimentary" <?php if($participant_data->category == 'Face-the-Gorillas-Silver-Complimentary'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Silver-Complimentary</option>
        
            <option value="Face-the-Gorillas-Gold-Complimentary" <?php if($participant_data->category == 'Face-the-Gorillas-Gold-Complimentary'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Gold-Complimentary</option>
        
            <option value="Face-the-Gorillas-Platinum-Complimentary" <?php if($participant_data->category == 'Face-the-Gorillas-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Face-the-Gorillas-Platinum-Complimentary</option>
        
            <option value="Ms-Geek-Silver" <?php if($participant_data->category == 'Ms-Geek-Silver'){ echo 'selected="selected"';}?>>Ms-Geek-Silver</option>
        
            <option value="Ms-Geek-Gold" <?php if($participant_data->category == 'Ms-Geek-Gold'){ echo 'selected="selected"';}?>>Ms-Geek-Gold</option>
        
            <option value="Ms-Geek-Platinum" <?php if($participant_data->category == 'Ms-Geek-Platinum'){ echo 'selected="selected"';}?>>Ms-Geek-Platinum</option>
        
            <option value="Ms-Geek-Silver-Discounted" <?php if($participant_data->category == 'Ms-Geek-Silver-Discounted'){ echo 'selected="selected"';}?>>Ms-Geek-Silver-Discounted</option>
        
            <option value="Ms-Geek-Gold-Discounted" <?php if($participant_data->category == 'Ms-Geek-Gold-Discounted'){ echo 'selected="selected"';}?>>Ms-Geek-Gold-Discounted</option>
        
            <option value="Ms-Geek-Platinum-Discounted" <?php if($participant_data->category == 'Ms-Geek-Platinum-Discounted'){ echo 'selected="selected"';}?>>Ms-Geek-Platinum-Discounted</option>
        
            <option value="Ms-Geek-Silver-Complimentary" <?php if($participant_data->category == 'Ms-Geek-Silver-Complimentary'){ echo 'selected="selected"';}?>>Ms-Geek-Silver-Complimentary</option>
        
            <option value="Ms-Geek-Gold-Complimentary" <?php if($participant_data->category == 'Ms-Geek-Gold-Complimentary'){ echo 'selected="selected"';}?>>Ms-Geek-Gold-Complimentary</option>
        
            <option value="Ms-Geek-Platinum-Complimentary" <?php if($participant_data->category == 'Ms-Geek-Platinum-Complimentary'){ echo 'selected="selected"';}?>>Ms-Geek-Platinum-Complimentary</option>
        
            <option value="Government" <?php if($participant_data->category == 'Government'){ echo 'selected="selected"';}?>>Government</option>

            <option value="Media" <?php if($participant_data->category == 'Media'){ echo 'selected="selected"';}?>>Media</option>
        
            <option value="NOC" <?php if($participant_data->category == 'NOC'){ echo 'selected="selected"';}?>>NOC</option>
        
            <option value="Organiser" <?php if($participant_data->category == 'Organiser'){ echo 'selected="selected"';}?>>Organiser</option>
        
            <option value="Delegate-Liaison" <?php if($participant_data->category == 'Delegate-Liaison'){ echo 'selected="selected"';}?>>Delegate-Liaison</option>
        
            <option value="Armed-Security" <?php if($participant_data->category == 'Armed-Security'){ echo 'selected="selected"';}?>>Armed-Security</option>
        
            <option value="Security" <?php if($participant_data->category == 'Security'){ echo 'selected="selected"';}?>>Security</option>
        
            <option value="Protocol" <?php if($participant_data->category == 'Protocol'){ echo 'selected="selected"';}?>>Protocol</option>
        
            <option value="Medical" <?php if($participant_data->category == 'Medical'){ echo 'selected="selected"';}?>>Medical</option>
        
            <option value="Catering" <?php if($participant_data->category == 'Catering'){ echo 'selected="selected"';}?>>Catering</option>
        
            <option value="Production-Technician" <?php if($participant_data->category == 'Production-Technician'){ echo 'selected="selected"';}?>>Production-Technician</option>
        
            <option value="Contractor" <?php if($participant_data->category == 'Contractor'){ echo 'selected="selected"';}?>>Contractor</option>
        
            <option value="Delegate invited" <?php if($participant_data->category == 'Delegate invited'){ echo 'selected="selected"';}?>>Delegate invited</option>
            
            <option value="Delegate request" <?php if($participant_data->category == 'Delegate request'){ echo 'selected="selected"';}?>>Delegate request</option>

            <option value="Government invited" <?php if($participant_data->category == 'Government invited'){ echo 'selected="selected"';}?>>Government invited</option>

            <option value="Government request" <?php if($participant_data->category == 'Government request'){ echo 'selected="selected"';}?>>Government request</option>

            <option value="Entertainers" <?php if($participant_data->category == 'Entertainers'){ echo 'selected="selected"';}?>>Entertainers</option>

            <option value="Bbcom-silver-complimentary" <?php if($participant_data->category == 'Bbcom-silver-complimentary'){ echo 'selected="selected"';}?>>Bbcom-silver-complimentary</option>

            <option value="Bbcom-gold-complimentary" <?php if($participant_data->category == 'Bbcom-gold-complimentary'){ echo 'selected="selected"';}?>>Bbcom-gold-complimentary</option>

            <option value="Bbcom-platinum-complimentary" <?php if($participant_data->category == 'Bbcom-platinum-complimentary'){ echo 'selected="selected"';}?>>Bbcom-platinum-complimentary</option>
            


    </select>
  </div>

  <div class="form-group">
    <label for="pass">Pass</label>
    <select name="participant-pass" id="pass" class="form-control bordered" required="required">
       
        <option value="" <?php if($participant_data->pass_type == ''){ echo 'selected="selected"';}?>> [--Select--] </option>


        
            <option value="Visitor" <?php if($participant_data->pass_type == 'Visitor'){ echo 'selected="selected"';}?>>Visitor</option>
        
            <option value="Platinum" <?php if($participant_data->pass_type == 'Platinum'){ echo 'selected="selected"';}?>>Platinum</option>
        
            <option value="Gold" <?php if($participant_data->pass_type == 'Gold'){ echo 'selected="selected"';}?>>Gold</option>

            <option value="Silver" <?php if($participant_data->pass_type == 'Silver'){ echo 'selected="selected"';}?>>Silver</option>
        
            <option value="Smart-Africa-Organiser" <?php if($participant_data->pass_type == 'Smart-Africa-Organiser'){ echo 'selected="selected"';}?>>Smart-Africa-Organiser</option>

            <option value="Media" <?php if($participant_data->pass_type == 'Media'){ echo 'selected="selected"';}?>>Media</option>
        
            <option value="NOC" <?php if($participant_data->pass_type == 'NOC'){ echo 'selected="selected"';}?>>NOC</option>
        
            <option value="Organiser" <?php if($participant_data->pass_type == 'Organiser'){ echo 'selected="selected"';}?>>Organiser</option>
        
            <option value="Delegate-Liaison" <?php if($participant_data->pass_type == 'Delegate-Liaison'){ echo 'selected="selected"';}?>>Delegate-Liaison</option>
        
            <option value="Armed-Security" <?php if($participant_data->pass_type == 'Armed-Security'){ echo 'selected="selected"';}?>>Armed-Security</option>
        
            <option value="Security" <?php if($participant_data->pass_type == 'Security'){ echo 'selected="selected"';}?>>Security</option>
        
            <option value="Protocol" <?php if($participant_data->pass_type == 'Protocol'){ echo 'selected="selected"';}?>>Protocol</option>
        
            <option value="Medical" <?php if($participant_data->pass_type == 'Medical'){ echo 'selected="selected"';}?>>Medical</option>
        
            <option value="Catering" <?php if($participant_data->pass_type == 'Catering'){ echo 'selected="selected"';}?>>Catering</option>
        
            <option value="Production-Technician" <?php if($participant_data->pass_type == 'Production-Technician'){ echo 'selected="selected"';}?>>Production-Technician</option>
        
            <option value="Contractor" <?php if($participant_data->pass_type == 'Contractor'){ echo 'selected="selected"';}?>>Contractor</option>
        
            <option value="Moderator" <?php if($participant_data->pass_type == 'Moderator'){ echo 'selected="selected"';}?>>Moderator</option>
            
            <option value="COMS" <?php if($participant_data->pass_type == 'COMS'){ echo 'selected="selected"';}?>>COMS</option>

            <option value="Speaker" <?php if($participant_data->pass_type == 'Speaker'){ echo 'selected="selected"';}?>>Speaker</option>

            <option value="Event-Management" <?php if($participant_data->pass_type == 'Event-Management'){ echo 'selected="selected"';}?>>Event-Management</option>

            <option value="Usher" <?php if($participant_data->pass_type == 'Usher'){ echo 'selected="selected"';}?>>Usher</option>

            <option value="Clinician" <?php if($participant_data->pass_type == 'Clinician'){ echo 'selected="selected"';}?>>Clinician</option>

            <option value="Entertainers" <?php if($participant_data->pass_type == 'Entertainers'){ echo 'selected="selected"';}?>>Entertainers</option>



    </select>
  </div>

  <div class="form-group">
    <label for="pass">Photo</label>
    <div class="image-editor">
        <div class="row">
            <div class="col-sm-4" style="padding: 5px">
                <div class="form-group">
                    <input name="register-photo" onchange="readURL(this);" type="file" />
                </div>
            </div>
            <div class="col-sm-4" style="padding: 5px">

                <img alt="Image Display Here" class="cropit-preview" id="test" src="<?=DNADMIN?>/icon/photo.png" />
            </div>
        </div>
    </div>

  </div>



